<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $profiles = [
            [
                'name' => 'L. M. ARANTA THIAR ELKANTA RIZKY ILLAHI',
                'nim'  => '2301010138',
                'bio'  => 'professional back end developer and occasionally AK47 bringer',
                'img'  => asset('images/aranta.jpg')
            ],
            [
                'name' => 'ARTHUR EMANUEL DEKKO',
                'nim'  => '2301010097',
                'bio'  => 'Designing front-end is my passion sir 💖',
                'img'  => asset('images/arthur.jpg')
            ],
        ];

        return view('about', compact('profiles'));
    }
}
