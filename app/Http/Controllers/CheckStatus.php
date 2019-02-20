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
}
