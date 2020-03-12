<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Helpers\CrudIdentifier;

class Commission extends Model
{
    use CrudIdentifier;

    public function subjects()
    {
        return $this->hasMany('App\Subject');
    }
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
