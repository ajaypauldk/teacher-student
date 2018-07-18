<?php

namespace App\\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Permission;

class RolePermission extends Model
{
    use SoftDeletes;
    protected $table='role_permissions';
    protected $dates = ['deleted_at'];
    protected $fillable = ['role_id', 'permission_id'];
    
    public function rolePermissionName(){
    	return $this->belongsTo(Permission::class, 'permission_id','id');
    }
}
