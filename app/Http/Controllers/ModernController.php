<?php

namespace App\Http\Controllers;

use App\Models\Modern;
use Illuminate\Http\Request;

class ModernController extends Controller
{
    public function index()
    {
            $moderns = Modern::all();
            return view('moderns.index', compact('moderns'));
    }
    public function show($modern)
    {
        return view('moderns.show', [
            'modern' => Modern::findOrFail($modern)
        ]);
    }
}
