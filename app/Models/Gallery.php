<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\KategoriArtikel;

class Gallery extends Model
{
    use HasFactory;

    protected $table = 'gallery';

    protected $fillable = [
    	'nama_gallery', 'jenis', 'gambar_gallery', 'deskripsi_gallery',
    ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function kategoriArtikel()
    {
    	return $this->belongsTo(KategoriArtikel::class);
    }

    public function getThumbnail()
    {
    	return 'uploads/img/artikel/'.$this->thumbnail;
    }
}
