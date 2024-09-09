<?php 

namespace Prositedeveloper\Package\Http\Controllers;

use Illuminate\Routing\Controller;

class LaravelPackageController extends Controller
{
    public function home(): string 
    {
        return view('laravel-package::home', [
            'text' => 'Hello, Laravel Package!'
        ]);
    }
}