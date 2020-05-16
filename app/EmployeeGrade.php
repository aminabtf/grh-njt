<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeGrade extends Model
{
    protected $fillable = [
        'promotion_date'
    ];

    protected $primarykey = "id";

    protected $table = "employee_grades";

    public function user(){
        return $this->hasMany('App\User');
    }
    public function grade(){
        return $this->hasMany('App\Grade');
    }
}
