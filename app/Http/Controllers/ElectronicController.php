<?php

namespace App\Http\Controllers;

use App\Models\Electronic;
use Illuminate\Http\Request;

class ElectronicController extends Controller
{
    public function index()
    {
        $electronics = Electronic::all();
        return View('electronics.index', compact('electronics'));
    }

    public function show($electronic)
    {
        return view('electronics.show', [
            'electronic' => Electronic::findOrFail($electronic)
        ]);
    }
}
