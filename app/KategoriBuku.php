<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriBuku extends Model
{
    protected $table = 'kategori_buku';
    protected $fillable = ['id','nama'];

     public function buku(){
        return $this->hasMany('App\Buku');
    }
}