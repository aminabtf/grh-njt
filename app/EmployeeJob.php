<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeJob extends Model
{
    protected $fillable = [
        'user_id',
        'job_id',
        'assignment_date'
    ];

    protected $primarykey = "id";

    protected $table = "employee_jobs";

    public function user(){
        return $this->hasMany('App\User','foreign_key','user_id');
    }
    public function job(){
        return $this->hasMany('App\Job','foreign_key');
    }
}
