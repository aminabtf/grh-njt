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
        'name',
        'hierarchic_level'
    ];

    public function unity_attachement(){
        return $this->hasOne('App\Unity');
    }

    public function chief_of_unity(){
        return $this->hasOne('App\User','foreign_key');
    }
}
