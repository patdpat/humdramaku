<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Show extends Model
{
    use SoftDeletes;

    public function seats()
    {
        return $this->hasMany('App\Seat');
    }

    protected $dates = ['date', 'deleted_at'];

}
