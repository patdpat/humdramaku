<?php

namespace App\Http\Controllers;

use App\Seat;
use Illuminate\Http\Request;
use Nexmo\Message\Shortcode\Alert;

class AddseatController extends Controller
{

    public function viewSeat() {
        return view('admin.adminAddSeat');
    }


    public function addSeat() {
        for ($i=3 ; $i<=15 ; $i++) {
            $seat = new Seat();
            $seat->show_id = 1;
            $seat->seatnumber = "A".$i;
            $seat->status = 1;
            $seat->save();
//
//            try {
//                $seat->save();
//                echo 'Success';
//            }catch (\Exception $x) {
//                echo 'Error';
//            }

        }


    }
}
