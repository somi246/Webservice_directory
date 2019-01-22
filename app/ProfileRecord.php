<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfileRecord extends Model
{
    // Table Name
    protected $table = 'profile_record';

    //Primary Key
    public $primaryKey = 'id';
    
    //Timestamps
    public $timestamps = true;
}
