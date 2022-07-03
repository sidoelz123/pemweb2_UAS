<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    use HasFactory;
    protected $keyType = 'string';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $table = 'mahasiswas';
    public $timestamps = false;
}
