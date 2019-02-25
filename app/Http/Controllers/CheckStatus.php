<?php

namespace App\Http\Controllers;

use App\Seat;
use App\Show;
use Illuminate\Http\Request;

class CheckStatus extends Controller
{
    public function checkStatus(Request $request) {
//        $show = Show::find($request->show);
        $queryOrderid = Seat::select('seatnumber','orderid')->get();
        $arrayOrderid = array();
        array_push($arrayOrderid,$queryOrderid);

//        dd($query) ;
//        foreach ($query as $row) {
//            dd($row->seatnumber);
//
//        }
        return view('admin.checkstatus', [
            'data' => $arrayOrderid
        ]);
    }



    public function changeStatus(Request $request) {
//        echo $request->orderid ;
//        echo $allseat[1];
        $orderID = explode('-',$request->orderid);
        if ($orderID[0] == 'Accept') {
            $statusSeat = Seat::where('orderid',$orderID[1])->get();
            foreach ($statusSeat as $statusSeat){
                $statusSeat->status = 2;
                $statusSeat->save();
            }

        }

        else if ($orderID[0] == 'Decided') {
            $statusSeat = Seat::where('orderid',$orderID[1])->get();
            foreach ($statusSeat as $statusSeat){
                $statusSeat->status = 0;
                $statusSeat->save();
            }
        }

    }
}
