<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Child extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'birthday',
        'gender'
    ];


    /**
     * primary key
     */
    protected $primarykey = "id";

    protected $table = "childs";

    public function user(){
        return $this->hasOne('App\User');
    }

    public function school_certificate(){
        return $this->hasMany('App\SchoolCertificate');
    }
}
