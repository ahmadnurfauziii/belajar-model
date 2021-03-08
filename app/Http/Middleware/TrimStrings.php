<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\TrimStrings as Middleware;

class TrimStrings extends Middleware
{
    /**
     * The names of the attributes that should not be trimmed.
     *
     * @var array
     */
    protected $except = [
<<<<<<< HEAD
        'current_password',
=======
>>>>>>> fbc4a0d145f7d64a13bace27f7c79ebca819bd15
        'password',
        'password_confirmation',
    ];
}
