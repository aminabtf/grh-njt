<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Preferences extends Model
{
    protected $fillable = [
        'parameter',
        'value'
    ];

    protected $primarykey = "id";

    protected $table = "preferences";
}
