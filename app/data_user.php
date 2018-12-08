<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class data_user extends Model
{
    protected $table='data_user';
    protected $primaryKey = 'id_user';
    public $incrementing = false;
    public function data_user()
    {
    	return $this->belongsTo('App\data_user','id_user');
    }
}
