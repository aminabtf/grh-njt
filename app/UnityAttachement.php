<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnityAttachement extends Model
{

    protected $table= "unity_attachements";

    protected $primarykey = "id";


      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'unity',
        'unity_attachement'
    ];

    public function unity_attachement() {
        return $this->belongsTo('App\Unity', 'unity_attachement');
    }

    public function unity() {
      return $this->belongsTo('App\Unity', 'unity');
    }

}
