<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prodbio extends Model
{
     protected $fillable = ['nomprod','cat_id','detail','img'];
     public function categorie() {
         return $this->belongsTo('App\Catbio');
     }

    // protected $guarded = [];
}
