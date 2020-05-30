<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeUnity extends Model
{
    protected $table= "employee_unities";

    protected $primarykey = "id";

      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'unity_id',
        'user_id',
        'is_chief',
    ];

    public function unity(){
        return $this->hasMany('App\Unity');
    }

    public function user(){
        return $this->hasMany('App\User');
    }
}
