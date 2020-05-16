<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spouse extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'lastname',
        'birthday',
        'phone'
    ];


    /**
     * primary key
     */
    protected $primarykey = "id";

    protected $table = "spouses";

    public function user(){
        return $this->hasOne('App\User');
    }
}
