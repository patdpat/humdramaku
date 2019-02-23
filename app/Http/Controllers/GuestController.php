<?php

namespace App\Http\Controllers;

use App\Seat;
use App\Show;
use Illuminate\Http\Request;
use Alert;

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
//        return $orderId;

//
        $count = 0;
        $allseat = explode(',',$request->getseat);
        foreach ($allseat as $seat) {
//            echo $request->orderID;
            if ($seat!=null) {
//                echo $seat."<p>";
                $check = Seat::where('seatnumber',$seat)->where('show_id',$request->show)->where('status',1)->first();
                if (!$check){
//
                }else{
                    echo "exist";
                    $count += 1;
                }
            }
        }

        if ($count == 0) {
            foreach ($allseat as $seat) {
//            echo $request->orderID;
                if ($seat!=null) {
                    $information = new Seat(
                        [
                            'show_id' => $request->show,
                            'seatnumber' => $seat,
                            'name' => $request->name,
                            'email' => $request->email,
                            'phone' => $request->phone,
                            'status' => 1,
                            'orderid' => $request->orderID
                        ]
                    );
                    $information->save();
                }
            }
        }
        else {
            Alert::warning('การจองล้มเหลว', 'Warning Message')->persistent('Close');;
            return redirect('/') ;
        }

//
//        dd('pass');
//
        return view('admin.checkstatus');
    }



}

