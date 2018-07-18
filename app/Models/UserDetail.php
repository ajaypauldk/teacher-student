<?php

namespace App\\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class UserDetail extends Model
{
 	use SoftDeletes;
 	protected $table='user_details';
    protected $dates = ['deleted_at'];
    protected $fillable = ['address', 'postal_code', 'mobile', 'delete_at'];
  
}