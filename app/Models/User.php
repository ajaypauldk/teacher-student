<?php

namespace App\\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Role;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    use SoftDeletes;
    protected $table='users';
    protected $dates = ['deleted_at'];
    protected $fillable = ['name', 'email', 'password','user_role_id','status'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];
    
    public function role(){
        return $this->belongsTo(Role::class,'user_role_id', 'id');
    }
}
