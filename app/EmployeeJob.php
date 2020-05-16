<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeJob extends Model
{
    protected $fillable = [
        'assignment_date'
    ];

    protected $primarykey = "id";

    protected $table = "employee_jobs";

    public function user(){
        return $this->hasMany('App\User');
    }
    public function job(){
        return $this->hasMany('App\Job');
    }
}
