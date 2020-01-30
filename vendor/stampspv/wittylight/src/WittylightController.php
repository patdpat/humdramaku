<?php

namespace Stampspv\Wittylight;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class WittylightController extends Controller
{

    private static $api_url_test = "https://wittylight.com/api/v1/wittymail/sendmail";
    private static $api_url_real = "https://wittylight.com/api/v1/wittymail/sendmail";
    private static $api_url_logs = "https://wittylight.com/api/v1/wittylog/sendlog";


    private static function check()
    {
        $env = env('WITTYLIGHT_TOKEN');
        $tes = env('WITTYLIGHT_TEST');

        if ($env && $tes) {
            return true;
        } else {
            return "Don't have Wittylight token and Test in .env";
        }
    }

    private static function getIP()
    {

        if (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER)) {

            $ips = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
            return array_shift($ips);

        } else {

            return request()->getClientIp();

        }

    }

    private static function sendPost($url, $params = array(), $headers = array())
    {
        if (is_array($params)) {
            $data = http_build_query($params);
        } else {
            $data = $params;
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 15);

        if (empty($headers) === FALSE) {
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        }
        if (empty($data) === FALSE) {
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        }

        $response = curl_exec($ch);
        if (curl_errno($ch)) {
            return null;
        }
        curl_close($ch);

        return $response;
    }

    public static function sendmail($email,$data)
    {
        if (self::check() === true) {
            if ($email){
                if (env('WITTYLIGHT_TEST') !== true) {
                    $url = self::$api_url_real;
                } else {
                    $url = self::$api_url_test;
                }

                try{

                    $local = [
                        'token'     => env('WITTYLIGHT_TOKEN'),
                        'to'        => $email
                    ];

                    $data       = array_merge($data,$local);

                    $response = self::sendPost($url,$data);
                    if (empty($response)) {
                        return false;
                    }
                    return json_decode($response, true);
                }catch (\Exception $x){
                    return $x->getMessage();
                }
            }else{
                return "not found email";
            }


        } else {
            return self::check();
        }

    }

    public static function logs($status = "error",$message = "N/A",$notification = false,$request = null)
    {
        $status             = $status;
        $message            = $message;
        $notification       = $notification;

        if (!$request){
            $request = request();
        }

        if ($request){
            // check auth
            if ($request->user()){
                $auth       = $request->user()->email ?? $request->user()->name ?? $request->user()->firstname ?? "has_auth";
            }else{
                $auth       = "not_have_auth";
            }

            if ($request->url()){
                $url = $request->url();
            }else{
                $url = $_SERVER['PATH_INFO'];
            }

            $method = $request->method() ?? "N/A";

        }

        $user_agent = $_SERVER['HTTP_USER_AGENT'];

        $data = [
            'status'        => $status,
            'url'           => $url,
            'method_text'   => $method,
            'auth'          => $auth,
            'message'       => $message,
            'ip'            => self::getIP(),
            'user_agent'    => $user_agent ?? "N/A",
            'notification'  => $notification,
            'token'         => env('WITTYLIGHT_TOKEN') ?? null,

        ];

        $response = self::sendPost(self::$api_url_logs,$data);
    }

}
