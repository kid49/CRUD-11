<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = 'buku';
    protected $fillable = ['judul' ,'isbn' , 'penerbit' , 'pengarang', 'tahun_terbit' , 'kategori_id'];

    public function kategori(){
        return $this->hasOne('App\KategoriBuku', 'id', 'kategori_id');
    }

}
