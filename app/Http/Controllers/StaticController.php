<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function index() {
        return view('welcome');
        }
        public function call() {
            return view('call');
        }

}
