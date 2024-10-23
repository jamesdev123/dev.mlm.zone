<?php

namespace App;

use Illuminate\Notifications\Notifiable;

class Country 
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'zipcode'
    ];

}
