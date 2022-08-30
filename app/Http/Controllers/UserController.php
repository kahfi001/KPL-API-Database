<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        // $users = [
        //     [
        //         'name'      => 'John Doe',
        //         'email'     => 'john@mail.com',
        //         'twitter'   => 'johndoe'
        //     ],
        //     [
        //         'name'      => 'Tailor Otwell',
        //         'email'     => 'tailor@mail.com',
        //         'twitter'   => 'tailorott'
        //     ],
        //     [
        //         'name'      => 'Steve Schoger',
        //         'email'     => 'steve@mail.com',
        //         'twitter'   => 'steveschoger',
        //     ],
        //     [
        //         'name'      => 'Wikan',
        //         'email'     => 'kan@mail.com',
        //         'twitter'   => 'wkn',
        //     ],
        // ];

        return view('users.index', [
            'users' => $users,
        ]);
    }

    public function show($user)
    {
        return view('users.show', [
            'user' => $user,
        ]);
    }
}
