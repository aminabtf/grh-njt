<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'adress',
        'bank_code',
        'agency_code'
    ];


    /**
     * primary key
     */
    protected $primarykey = "id";

    protected $table = "banks";

    public function user(){
        return $this->hasMany('App\User','foreign_key');
    }
}
