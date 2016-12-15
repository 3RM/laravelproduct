<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Product extends Model
{
    /**
   * Массово присваиваемые атрибуты.
   *
   * @var array
   */
  protected $fillable = ['name','description'];
  
  public function getCreatedAtAttribute($date){
	  
	return Carbon::createFromFormat('Y-m-d H:i:s',$date)->format('H:i:s / d.m.Y');
	  
  }
  public function getUpdatedAtAttribute($date){
	  
	return Carbon::createFromFormat('Y-m-d H:i:s',$date)->format('H:i:s / d.m.Y');
	  
  }
}
