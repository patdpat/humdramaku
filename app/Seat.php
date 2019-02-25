<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Seat extends Model
{
    use SoftDeletes;

    public function show()
    {
        return $this->belongsTo('App\Show', 'show_id');
    }

    //
    protected $fillable = ['show_id','seatnumber' , 'name' , 'email' , 'phone', 'status','orderid','total_price'];

    protected $dates = ['deleted_at'];
}
