<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'grade',
    ];


    /**
     * primary key
     */
    protected $primarykey = "id";

    protected $table = "grades";


}
