<?php

namespace App\Http\Controllers;

use App\Seat;
use App\Show;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function api(Request $request) {
        $shows = Show::whereDate('date', date("Y-m-d", strtotime($request->date)))->get();
        foreach($shows as $show) {
            $show->time = $show->date->format('H:i');
        }
        echo json_encode(['shows' => $shows], JSON_UNESCAPED_UNICODE);
    }


    public function order(Request $request)
    {
        $orders = Seat::where('orderid', $request->orderid)->get();
        foreach ($orders as $order) {
            $order->strDate = $order->show->date->format('d-m-Y');
            $order->strTime = $order->show->date->format('H:i');
        }
        echo json_encode(['orders' => $orders], JSON_UNESCAPED_UNICODE);
    }
}
