<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kursus extends Model
{
    //
    use HasFactory;
    protected $table = 'kursus';
    protected $primaryKey = 'id_kursus';
    protected $fillable = ['id_admin', 'nama_kursus', 'deskripsi', 'harga', 'durasi', 'level', 'status'];
}
