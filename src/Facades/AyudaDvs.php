<?php


namespace Chondal\AyudaDvs\Facades;

use Illuminate\Support\Facades\Facade;


class AyudaDvs extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ayuda-dvs';
    }
}
