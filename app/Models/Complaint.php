<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    use HasFactory;

    const BELUM_SELESAI = 'BELUM SELESAI';
    const PROSES = 'PROSES';
    const SELESAI = 'SELESAI';

    protected $fillable = [
        'photo'
    ];
}
