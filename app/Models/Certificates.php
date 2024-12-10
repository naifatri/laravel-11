<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificates extends Model
{
    use HasFactory;

    protected $table = 'certificates';

    protected $fillable = [
        'name',
        'description',
        'issued_by',
        'issued_at',
        'file_path',
    ];
}
