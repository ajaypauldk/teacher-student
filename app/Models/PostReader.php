<?php

namespace App\\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;
use App\Models\Post;

class PostReader extends Model
{


	use SoftDeletes;
    protected $table='post_reader';
    protected $dates = ['deleted_at'];
    protected $fillable = ['post_id', 'reader_id'];
   
    public function readers(){
    	return $this->hasMany(User::class,'reader_id','id');

    }
}
