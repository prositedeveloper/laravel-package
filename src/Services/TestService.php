<?php

namespace Prositedeveloper\Package\Services;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class TestService
{
    public function getAnotherText(): string 
    {
        return fake()->text;
    }

    public function getAnotherRandomString(): string 
    {
        return Str::random(100);
    }

    public function hashString(string $string): string
    {
        return Hash::make($string);
    }

    public function sum(int|float $a, int|float $b): int|float 
    {
        return $a + $b;
    }

    public function getUrl()
    {
        return config('laravel-package.url');
    }

    public function getSecret()
    {
        return config('laravel-package.secret');
    }
}