<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Observers\Observer;

class Carbrand extends Model//здесь возможно должно быть Eloquent
{
     public $carbrand_id;
     public $carbrand_name;

    public function carmods(){
        return $this->hasMany("App\Carmod", "carmod_id", "carbrand_id");
    }

    /*$connect = new PDO();
$query = "SELECT * FROM carbrand_id ORDER BY carbrand_name ASC";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();*/
}