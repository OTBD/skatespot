<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function displayUsers()
    {
        $displayUsers = DB::table('users')
            ->orderBy('id', 'asc')
            ->lists('name', 'id'); // checked some of my code I have these swapped value first then id
    }
}
