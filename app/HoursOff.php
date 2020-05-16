<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HoursOff extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type',
        'description',
        'start_date',
        'end_date'
    ];


    /**
     * primary key
     */
    protected $primarykey = "id";

    protected $table = "hours_off";

    public function user(){
        return $this->hasMany('App\User');
    }
}
