<?php 

namespace Prositedeveloper\Package\Facades;

use Illuminate\Support\Facades\Facade;
use Prositedeveloper\Package\Services\TestService;

class Test extends Facade
{
    protected static function getFacadeAccessor(): string 
    {
        return TestService::class;
    }
}