<?php

namespace Sukhrob\CoolPackage\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Sukhrob\CoolPackage\CoolPackage
 */
class CoolPackage extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Sukhrob\CoolPackage\CoolPackage::class;
    }
}
