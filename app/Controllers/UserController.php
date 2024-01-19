<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class UserController extends BaseController
{
    public function User()
    {
        return view('User');
    }
    public function cart()
    {
        return view('cart');
    }
    public function checkout()
    {
        return view('checkout');
    }
    public function Landing()
    {
        return view('Landing');
    }
    public function Workshop()
    {
        return view('Workshop');
    }
    public function admin()
    {
        return view('admin');
    }
    public function registration()
    {
        return view('registration');
    }
}
