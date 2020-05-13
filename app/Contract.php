<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $table = "contracts";

    protected $primarykey = "id";

      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type',
        'net_salary',
        'brut_salary',
        'bonuses',
        'rib',
        'start_date',
        'end_date'
    ];

    public function user(){
        return $this->hasOne('App\user');
    }
}
