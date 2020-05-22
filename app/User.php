<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'birthday',
        'gender',
        'nationality',
        'family_situation',
        'cin',
        'passeport_number',
        'passeport_end_date',
        'current_adress',
        'permanent_adress',
        'phone_number',
        'postal_code',
        'home_phone',
        'mobile',
        'work_phone',
        'work_email',
        'city',
        'region',
        'email',
        'password',
        'country',
        'emergency_contact_name',
        'emergency_contact_mobile',
        'emergency_contact_fix',
        'emergency_contact_adress',
        'emergency_contact_relationship'

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * primary key of users table
     * @var string
     */
    protected $primarykey = "id";


    /**
     * the name of the table users
     * @var string
     */
    protected $table = "users";



}
