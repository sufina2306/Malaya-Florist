<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Papan extends Model
{
    use HasFactory;
    protected $table = 'papan';
    
    protected $fillable = [
        'nama',
        'jenis_papan',
        'harga',
        'foto_barang',
        
    ];
}