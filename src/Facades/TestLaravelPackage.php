<?php

namespace jebraili\TestLaravelPackage\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \jebraili\TestLaravelPackage\TestLaravelPackage
 */
class TestLaravelPackage extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \jebraili\TestLaravelPackage\TestLaravelPackage::class;
    }
}
