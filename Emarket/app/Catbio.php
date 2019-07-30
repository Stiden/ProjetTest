<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catbio extends Model
{
    protected $fillable = ['nomcat'];
    public function produit() {
        return $this->hasMany('App\Prodbio');
    }

}
