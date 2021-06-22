<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Discussion extends Model
{
    protected $table = 'discussions';

    protected $fillable = [
        'nama',
        'email',
        'judul',
        'isi'
    ];
}
