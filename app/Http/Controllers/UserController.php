<?php

namespace app\Http\Controllers;

use app\Http\Requests;
use Illuminate\Http\Request;

use app\Models\Village;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Shows the user their details loaded from LawMaster entity
     * @return mixed
     */
    public function myDetails()
    {
        return view('my-details');
    }
}