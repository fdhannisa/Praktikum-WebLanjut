<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function profile(){
        return view('profile');
    }

        public function create_user(){
        return view('create_user');
    }
    
}