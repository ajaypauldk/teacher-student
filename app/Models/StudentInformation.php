<?php

namespace App\\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;



class StudentInformation extends Model
{
	
	use SoftDeletes;
 	protected $table='student_informations';
    protected $dates = ['deleted_at'];
    protected $fillable = ['student_user_id', 'teacher_user_id', 'delete_at'];

    public function students(){
    	return $this->belongsTo(User::class,'teacher_user_id','id');
    }

}
