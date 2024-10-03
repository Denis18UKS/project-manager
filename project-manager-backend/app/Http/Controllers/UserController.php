<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Tasks;

class UserController extends Controller
{
    public function index() {
        return view('index');
}
}