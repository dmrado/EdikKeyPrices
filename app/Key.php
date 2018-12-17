<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Key extends Model
{
    public $key_id;
    public $keyName;
    public $keySubscr;
    public $keyPict;

    public function caryears(){
        return $this->belongsTo("App\Caryear", "key_id", "caryear_id");
    }
}
