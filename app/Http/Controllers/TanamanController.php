<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TanamanController extends Controller
{
    public function show($id)
    {
        $path = storage_path('app/public/data.json');
        $data = json_decode(file_get_contents($path), true);

        $tanaman = collect($data)->firstWhere('id', $id);
        $tanamanIndex = collect($data)->search($tanaman);

        return view('show', compact('tanaman', 'data', 'tanamanIndex'));
    }

    public function strategis()
    {
        $path = storage_path('app/public/data.json');
        $tanamanData = json_decode(file_get_contents($path), true);
        return view('strategis', compact('tanamanData'));
    }

    public function prospektif()
    {
        $path = storage_path('app/public/data.json');
        $tanamanData = json_decode(file_get_contents($path), true);
        return view('prospektif', compact('tanamanData'));
    }

    public function lokal()
    {
        $path = storage_path('app/public/data.json');
        $tanamanData = json_decode(file_get_contents($path), true);
        return view('lokal', compact('tanamanData'));
    }
}