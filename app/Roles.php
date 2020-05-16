<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    protected $fillable = [
        'name',
        'description'
    ];

    protected $primarykey = "id";

    protected $table = "roles";
}
