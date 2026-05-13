<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class partnerController extends Controller
{
    public function create()
{
    return view('admin.partners.create');
}

public function store(Request $request)
{
    \App\Models\partners::create([
        'name' => $request->name,
        'logo_url' => $request->logo_url,
    ]);

    return redirect()->route('partners.index');
}
    public function index()
{
    $partners = \App\Models\partners::all();
    return view('admin.partners.index', compact('partners'));
}
}
