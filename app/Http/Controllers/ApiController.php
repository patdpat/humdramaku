<?php

namespace App\Http\Controllers;

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
}
