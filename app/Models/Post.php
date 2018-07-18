<?php

namespace App\\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;

class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    use SoftDeletes;
    protected $table='posts';
    protected $dates = ['deleted_at'];
    protected $fillable = ['author_id', 'post_heading', 'content'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
       
    public function post(){
        return $this->belongsTo(User::class,'id');
    }
}
