<?php

namespace NepaliDateConverter\Facades;

use Illuminate\Support\Facades\Facade;

class NepaliDateConverter extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \NepaliDateConverter\NepaliDateConverter::class;
    }
}
