<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SchoolCertificate extends Model
{
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'level',
        'delivery_date',
        'school_name',
        'school_adress',
        'school_contact'
    ];


    /**
     * primary key
     */
    protected $primarykey = "id";

    protected $table = "school_certificates";

}
