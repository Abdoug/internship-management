<?php

namespace App\Helpers;

trait CrudIdentifier
{
    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $id = rand();

            while ($model->where('id', '=', $id)->count() > 0) {
                $id = rand();
            }
            $model->id = $id;
        });
    }
}
