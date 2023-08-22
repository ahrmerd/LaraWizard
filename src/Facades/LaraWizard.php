<?php

namespace Ahrmerd\LaraWizard\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ahrmerd\LaraWizard\LaraWizard
 */
class LaraWizard extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Ahrmerd\LaraWizard\LaraWizard::class;
    }
}
