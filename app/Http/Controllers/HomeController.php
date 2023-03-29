<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use App\Models\Home;
use App\Models\Section;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $sections = Home::join('sections', 'sections.id', '=', 'homes.section_id')
            ->select('homes.*', 'sections.section as section')
            ->get();
        // ->toArray();

        // dd($sections);
        return view('edit-home.index', [
            'data' => $sections,
        ]);
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
    public function show(Home $home)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $validated = $request->validate([
            'header' => 'string|max:255',
            'body' => 'string',
            'image' => 'file|mimes:jpg',
        ]);

        if ($request->hasFile('image')) {
            $path = 'assets/img/home';
            $fileName = $request->section;

            $newImageName = $fileName . '.' . $request->file('image')->guessExtension();
            $request->image->move(public_path($path), $newImageName);
            $validated['image'] = $newImageName;
        }
        Home::where('id', $id)->update($validated);
        return redirect(route('edit-home.index'))->with('message', 'Record updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Home $home)
    {
        //
    }

    // RENDER TO THE ACTUAL WEBPAGE
    public function home(): View
    {
        return view('home', [
            'data' => Home::all(),
        ]);
    }
}
