<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
  protected $table = "User";
  protected $primarykey ='id_user';
  public $timestamps=true;

  public function shoes(){
		return $this->hasMany('\App\Models\Shoes','id_shoes');  
	}


  public function order(){
		return $this->hasOne('\App\Models\Order','id_order');  
	}

}