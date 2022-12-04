<?php

namespace App\Http\Controllers;

use App\Models\Medical;
use Illuminate\Http\Request;

class MedicalController extends Controller
{
    public function index()
    {
        $medicals = Medical::all();
        return View('medicals.index', compact('medicals'));
    }

    public function show($medical)
    {
        return view('medicals.show', [
            'medical' => Medical::findOrFail($medical)
        ]);
    }
}
