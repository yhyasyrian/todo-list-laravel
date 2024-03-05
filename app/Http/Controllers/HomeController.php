<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('welcome');
    }

    /**
     * @return string[] Array<Title=>NameRoute>
     */
    public static function getLinkForNavigationBar():array
    {
        if (auth()->check())
            return [
                'Dashboard' => 'dashboard',
            ];
        else
            return [
                'Login' => 'login',
                'Register' => 'register',
            ];
    }
}
