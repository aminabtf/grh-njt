<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PreferencesUser extends Model
{
    protected $primarykey = "id";

    protected $table = "preferences_users";

    public function user(){
        return $this->hasMany('App\User');
    }
    public function preferences(){
        return $this->hasMany('App\Preferences');
    }
}
