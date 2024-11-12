<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MMax extends Model
{
    use HasFactory;
    
    protected $table = 'data_max';
    protected $primaryKey = 'id';
    protected $fillable = ['heartrate', 'oxygen'];

}


