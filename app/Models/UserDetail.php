<?php

namespace App\\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;

class UserDetail extends Model
{
 	use SoftDeletes;
 	protected $table='user_details';
    protected $dates = ['deleted_at'];
    protected $fillable = ['address', 'postal_code', 'mobile', 'delete_at'];

    public function info(){
    	return this->belongsTo(User::class,'id');
    }

}
