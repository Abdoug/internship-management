<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Helpers\CrudIdentifier;

class Company extends Model
{
    use CrudIdentifier;

    public function subjects()
    {
        return $this->hasMany('App\Subject');
    }
}
