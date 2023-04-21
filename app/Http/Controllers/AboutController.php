<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Slider;
use App\Models\Section;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $sections = About::join('sections', 'sections.id', '=', 'abouts.section_id')
            ->select('abouts.*', 'sections.section as section')
            ->get();
        // ->toArray();

        // dd($sections);
        return view('edit-about.index', [
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
    public function show(About $about)
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
            $path = 'assets/img/about';
            $fileName = $request->section;

            $newImageName = $fileName . '.' . $request->file('image')->guessExtension();
            $request->image->move(public_path($path), $newImageName);
            $validated['image'] = $newImageName;
        }
        About::where('id', $id)->update($validated);
        return redirect(route('edit-about.index'))->with('message', 'Record updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
    {
        //
    }

    // RENDER TO THE ACTUAL WEBPAGE
    public function about(): View
    {
        $sliderArray = json_decode(Slider::where('slider_id', 1)->pluck('slider_array')->first());

        return view('about', [
            'data' => About::all(),
            'slider' => $sliderArray
        ]);
    }
}
