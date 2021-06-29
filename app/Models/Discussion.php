<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use TCG\Voyager\Facades\Voyager;
use App\Models\KategoriDiscuss;
class Discussion extends Model
{
    protected $table = 'discussions';

    protected $fillable = [
        'nama',
        'email',
        'judul',
        'isi'
    ];

    public function save(array $options = [])
    {
        // If no author has been assigned, assign the current user's id as the author of the post
        if (!$this->penjawab && Auth::user()) {
            $this->penjawab = Auth::user()->getKey();
            $this->tgl_jawab = Date(now());
            $this->status = 'TERJAWAB';
        }


        return parent::save();
    }

    public function penjawabId()
    {
        return $this->belongsTo(Voyager::modelClass('User'), 'penjawab', 'id');
    }
    public function kategoriId()
    {
        return $this->belongsTo(KategoriDiscuss::class, 'kategori_id', 'id');
    }
}
