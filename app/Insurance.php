<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'start_date',
        'end_date'
    ];


    /**
     * primary key
     */
    protected $primarykey = "id";

    protected $table = "insurances";

    public function user(){
        return $this->belongsTo('App\User','foreign_key');
    }
}
