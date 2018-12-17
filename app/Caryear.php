<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caryear extends Model
{
    public $caryear_id;
    public $caryear_name;

    public function keys(){
        return $this->hasMany("App\Key", "key_id", "caryear_id");
    }

    public function carmods(){
       return $this->belongsTo("App\Carmod", "caryear_id", "carmod_id");
   }
}
