<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Dashboard extends Model
{
    public function kategori_buku(){
        $this->hasOne('App\KategoriBuku');
    }
    public function buku(){
        $this->hasOne('App\Buku');
    }
}
