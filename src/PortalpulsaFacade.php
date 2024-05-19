<?php

namespace Faiznurullah\Portal;

use Illuminate\Support\Facades\Facade;

class PortalpulsaFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'portalpulsa';
    }
}