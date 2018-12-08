<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class data_pelanggan extends Model
{
    protected $table = 'data_pelanggan';
    protected $primaryKey = 'id_pelanggan';
    public $incrementing = false;
    public function data_pelanggan()
    {
    	return $this->hasOne('App\data_user','id_user')
    }
}
