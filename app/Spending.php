<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spending extends Model
{
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type',
        'cost',
        'reason',
        'justified',
        'type_of_justification',
        'refundable',
        'date',
    ];


    /**
     * primary key
     */
    protected $primarykey = "id";

    protected $table = "spendings";

    public function user(){
        return $this->hasMany('App\User');
    }
}
