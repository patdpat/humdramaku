<?php

namespace App\Http\Controllers;

use App\Mail\TestEmail;
use App\Seat;
use App\Show;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Alert;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;


class GuestController extends Controller
{
    public function index()
    {
        return view('welcome');
    }


    public function payment()
    {
        return view('admin.payment');
    }


    public function map()
    {
        return view('admin.map');
    }


    public function ticket()
    {
        return view('admin.ticket');
    }


    public function booking(Request $request)
    {
        $validated = $request->validate([
            'date' => 'required|min2',
        ]);

        return $request;
    }

    public function screen(Request $request ) {
        $show = Show::find($request->show);
        error_log($request->show);

        $seats = Seat::where('show_id',$show->id)->where('status',1)->get();
        $array = array();
        foreach ($seats as $seat){
            array_push($array,$seat->seatnumber);
        }
        return view('admin.screen',[
            'show'=>$show,
            'seats'=>$array,

        ]);
    }

    public function showtimes() {
        $shows = Show::get();
        return view('admin.showtimes',['shows'=>$shows]);
    }

    public function seatCreatStore(Request $request) {
//        $seat = $request->getseat;
//        $name = $request->name;
//        $email = $request->email;
//        $phone = $request->phone;
//        $id = $request->show;
//        $orderId = $request->orderID;

        $this->validate($request , [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);

        $orderNum = Seat::whereDate('created_at', Carbon::today())->get()->count() + 1;
        $orderNum = "HUM".Carbon::now()->format("ymd").sprintf('%04d', $orderNum);




//
        $count = 0;
        $allseat = explode(' ',$request->getseat);


        $countData = 0;
        foreach ($allseat as $data) {
            $countData += 1;
        }

        $numberOfSeat = Seat::get();

        $countSeat = 0;
        foreach ($numberOfSeat as $data) {
            $countSeat = $data->id;
        }


        $seatPrice = 0;
        if ($countSeat > 300) {
            $seatPrice = 250;

        }
        else {
            $seatPrice = 150;
        }

//        return $seatPrice;

        $checkCount = 0;
        foreach ($allseat as $data) {
            $checkCount += 1;
        }

        if ($seatPrice*$countData != $request->getPrice)  {
            return view('admin.error');
        }

        foreach ($allseat as $seat) {
//            echo $request->orderID;
            if ($seat!=null) {
//                echo $seat."<p>";
                $check = Seat::where('seatnumber',$seat)->where('show_id',$request->show)->where('status',1)->first();
                if (!$check){
//
                }else{
//                    echo "exist";
                    $count += 1;
                }
            }
        }

        if ($count == 0) {
            $showSeat = "";
            foreach ($allseat as $seat) {
//            echo $request->orderID;
                if ($seat!=null) {
                    $showSeat .= $seat." ";
                    $information = new Seat(
                        [
                            'show_id' => $request->show,
                            'seatnumber' => $seat,
                            'name' => $request->name,
                            'email' => $request->email,
                            'phone' => $request->phone,
                            'status' => 1,
                            'orderid' =>$orderNum,
                            'total_price' => $request->getPrice
                        ]
                    );
                    $information->save();
                }
            }
        }
        else {
            Alert::warning('การจองล้มเหลว', 'ที่นั่งนี้ได้ถูกจองไปเป็นที่เรียบร้อย')->persistent('Close');;
            return redirect('/') ;
        }


//        dd('pass');

        $orderId =$orderNum;

        $name = $request->name;

        try{
            $mail = Mail::to($request->email)->send(new TestEmail($orderId,$showSeat,$name));

        }catch (\Exception $x){
            return "error".$x;
        }


        return view('admin.payment',['orderId'=>$orderId]);

    }


    public function pay(Request $request) {
        $request->orderid;

        $this->validate($request , [
            'orderid' => 'required',
            'filepath' => 'required'
        ]);

        $payments = Seat::where('orderid',$request->orderid)->get();
        if ($payments->count() > 0){
            $request->file('filepath');
            $files = $request->file('filepath');
            if ($request->hasFile('filepath')) {
                $file = Input::file('filepath')->getClientOriginalName();
                $filename = pathinfo($file, PATHINFO_FILENAME);
                $path = $payments->first()->orderid.'-'.time() . '.' . $files->getClientOriginalExtension();
                $destinationPath = storage_path('/payment/');
                try {
                    $files->move($destinationPath, $path);
//                $work->thfPath = $path;
                } catch (\Exception $e) {
                    Alert::error('Upload failed!','Oops!')->persistent('Close');
                    return back()->withInput();
                }

                foreach ($payments as $payment){
                    $payment->path = $path;
                    $payment->save();
                }
                return view('admin.checkstatus');
            }
        }else{
            return "invalid";
        }

    }

//    public function testemail($seat , $name , $orderid) {
//        try{
//            $mail = Mail::to('kanapas.l@ku.th')->send(new TestEmail());
//            dd($mail);
//        }catch (\Exception $x){
//            return "error".$x;
//        }
//        //        dd(env('MAIL_HOST'));
//    }

}

