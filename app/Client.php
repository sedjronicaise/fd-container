<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class client extends Model
{
   protected $guarded = [];

    public function scopeStatus($query){

      return $query->where('status', 1)->get();

    }

    public function entreprise()
    {
        return $this->belongsTo('App\Entreprise');
    }

    public function getStatusAttribute($attributes){
      return [
         '0' => 'Inatif',
         '1' => 'Actif'
      ][$attributes];
    }
}
