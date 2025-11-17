<?php

namespace App\Http\Controllers;


class Home extends Controller
{
    public function index()
    {
        $data = [
            'user_name' => 'John Doe',
            'total_deposit' => 'IDR 0',
            'deposit_count' => 0,
        ];

        return view('dashboard', $data);
    }
    public function deposit()
    {
        return view('deposit');
    }
    public function member()
    {
        return view('member');
    }
}
