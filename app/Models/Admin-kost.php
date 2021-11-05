<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin-kost extends Model
{
    use HasFactory;
    public $primaryKey = 'id_admin';
    protected $fillable = [
        'nama'
    ];
}
