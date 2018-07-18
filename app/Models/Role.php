<?php

namespace App\\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\RolePermission;

class Role extends Model
{
    use SoftDeletes;
    protected $table='roles';
    protected $dates = ['deleted_at'];
    protected $fillable = ['role_name'];
    
    public function userRoles(){
    	return $this->belongsToMany(RolePermission::class, 'id','role_id');
    }
}
