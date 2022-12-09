<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function edit_profile()
    {
        return view('client.index.profile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function update_profile()
    {
        //
    }
    public function change_password()
    {
        //
    }
    public function update_password()
    {
        //
    }
}
