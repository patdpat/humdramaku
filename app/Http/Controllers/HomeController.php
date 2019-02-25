<?php

namespace App\Http\Controllers;

use App\Seat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $shows = DB::table('seats')->where('status',1)->orderBy('id','desc')->distinct()->get(['orderid']);

        $arr = array();
        foreach ($shows as $data) {
            if (!in_array($data->orderid , $arr)) {
                array_push($arr,$data->orderid);
            }
        }

//        print_r($arr);
        return view('home',['arr'=>$arr , 'shows'=>$shows]);
    }
}
