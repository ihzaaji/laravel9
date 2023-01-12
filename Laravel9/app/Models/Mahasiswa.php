<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = "sudin";
    protected $fillable = [
        "nama",
        "nim",
        "alamat",
        "tmp_lhr",
        "tgl_lhr",
        "no_hp",
    ];
}
