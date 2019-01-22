<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfileRecordHistory extends Model
{
    // Table Name
    protected $table = 'profile_record_history';

    //Primary Key
    public $primaryKey = 'id';
    
    //Timestamps
    public $timestamps = true;
}
