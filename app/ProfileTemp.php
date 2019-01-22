<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfileTemp extends Model
{
    // Table Name
    protected $table = 'profile_temp';

    //Primary Key
    public $primaryKey = 'id';
    
    //Timestamps
    public $timestamps = true;
}
