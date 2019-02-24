<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Observers\Observer;

class Carbrand extends Model
{
    protected $fillable = ["carbrand_id", "carbrand_name"];

    public function carmods(){
        return $this->hasMany("App\Carmod", "carmod_id", "carbrand_id");
    }
}