<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class beranda extends Model
{
    use HasFactory;
    Protected $fillable = [
        'heading_1',
        'sub_heading',    
        'heading_2',
        'selogan',

    ];
}