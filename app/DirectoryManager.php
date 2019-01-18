<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DirectoryManager extends Model
{
    // Table Name
    protected $table = 'directory_manager';

    //Primary Key
    public $primaryKey = 'id';
    
    //Timestamps
    public $timestamps = true;
}
