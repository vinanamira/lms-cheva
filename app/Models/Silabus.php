<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Silabus extends Model
{
    use HasFactory;
    protected $table = 'silabus';

    protected $fillable = [
        'nama_silabus',
        'created_at',
        'updated_at'
    ];
}
