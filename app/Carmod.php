<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carmod extends Model
{
    public function caryears(){
        return $this->hasMany("App\Caryear", "caryear_id", "carmod_id");
    }

    public function carbrands(){
        return $this->belongsTo("App\Carbrand", "carmod_id", "carbrand_id");
    }
}
