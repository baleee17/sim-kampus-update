<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Status extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $KeyType = 'string';
    protected $table='status'; 
    protected $primaryKey = 'StatusId'; // or null
}