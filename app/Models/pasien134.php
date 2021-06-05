<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pasien134 extends Model
{
    use HasFactory;
    use HasFactory;
    use HasFactory;
    protected $table = 'pasien';
    protected $primarykey = 'pasien_id';
    // protected $keytype = 'string';
    protected $fillable = [
        'id',
        'nama',
        'alamat',
    ];
}
