<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unity extends Model
{
    protected $table= "unities";

    protected $primarykey = "id";

      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'unity_name',
        'hierarchic_level'
    ];

    public function unity_attachement(){
        return $this->hasOne('App\Unity');
    }
    public function user(){
        return $this->belongsToMany('App\User');
    }
}
