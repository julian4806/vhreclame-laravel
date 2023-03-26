<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Text;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TextController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function updateHome(): View
    {
        return view('edit-text.home');
    }
    public function indexHome(): View
    {
        $pars = DB::table('paragraphs')->get();
        return view('home', ['pars' => $pars]);
    }


    public function updateAbout(): View
    {
        return view('edit-text.about');
    }
    public function updateContact(): View
    {
        return view('edit-text.contact');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Text $text)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Text $text)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Text $text)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Text $text)
    {
        //
    }
}
