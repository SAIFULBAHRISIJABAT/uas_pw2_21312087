<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uas extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa_21312087';
    protected $fillable = ['no_mahasiswa', 'nama_mahasiswa', 'program_studi'];

}
