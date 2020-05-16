<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RolesUser extends Model
{
    protected $primarykey = "id";

    protected $table = "roles_users";

    public function user(){
        return $this->hasMany('App\User');
    }
    public function roles(){
        return $this->hasMany('App\Roles');
    }
}
