<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfileTest extends Model
{
    // Table Name
    protected $table = 'profile_tests';

    //Primary Key
    public $primaryKey = 'id';
    
    //Timestamps
    public $timestamps = true;
}
