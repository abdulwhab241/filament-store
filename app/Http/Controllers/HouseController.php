<?php

namespace App\Http\Controllers;

use App\Models\House;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    public function index()
    {
        $houses = House::all();
        return View('houses.index', compact('houses'));
    }

    public function show($house)
    {
        return view('houses.show', [
            'house' => House::findOrFail($house)
        ]);
    }
}
