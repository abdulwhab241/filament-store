<?php

namespace App\Http\Controllers;

use App\Models\Electric;
use Illuminate\Http\Request;


class ElectricController extends Controller
{
    public function index()
    {
        $electrics = Electric::all();
        return View('electrics.index', compact('electrics'));
    }

    public function show($electric)
    {
        return view('electrics.show', [
            'electric' => Electric::findOrFail($electric)
        ]);
    }
}
