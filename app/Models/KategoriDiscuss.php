<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Discussion;

class KategoriDiscuss extends Model
{
    protected $table = 'kategori_discuss';

    public function discuss()
    {
        return $this->hasMany(Discussion::class, 'kategori_id');
    }
}
