<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konten extends Model
{
    use HasFactory;

    protected $table = 'tbl_konten';

    // Tambahkan 'description' ke dalam fillable
    protected $fillable = ['konten', 'description'];

    // Menghilangkan timestamps
    public $timestamps = false;
}
