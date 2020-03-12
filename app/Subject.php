<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Helpers\CrudIdentifier;

class Subject extends Model
{
    use CrudIdentifier;

    public function company()
    {
        return $this->belongsTo('App\Company');
    }
    public function commission()
    {
        return $this->belongsTo('App\Commission');
    }
    public function responsable()
    {
        return $this->hasOneThrough('App\User', 'App\Commission');
    }
}
