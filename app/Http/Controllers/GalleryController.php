<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use App\Models\Gallery;
use App\Models\Section;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $sections = Gallery::join('sections', 'sections.id', '=', 'galleries.section_id')
            ->select('galleries.*', 'sections.section as section')
            ->get();
        // ->toArray();

        // dd($sections);
        return view('edit-gallery.index', [
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
    public function show(Gallery $gallery)
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
            $path = 'assets/img/gallery';
            $fileName = $request->section;
            $newImageName = $fileName . '.' . $request->file('image')->guessExtension();
            $request->image->move(public_path($path), $newImageName);
            $validated['image'] = $newImageName;
        }
        Gallery::where('id', $id)->update($validated);
        return redirect(route('edit-gallery.index'))->with('message', 'Record updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        //
    }

    // RENDER TO THE ACTUAL WEBPAGE
    public function gallery(Request $request): View
    {
        $allCateogries = Storage::disk('foto-gallerij')->allDirectories();
        $path = public_path('assets/img/foto_gallerij/');

        if ($request->selected_category) {
            $category = $request->selected_category;
            $path = public_path('assets/img/foto_gallerij/' . $category);
            $images = File::allFiles($path);

            return view('gallery', [
                'data' => Gallery::all(),
                'categories' => $allCateogries,
                'selected_category' => $category,
                'images' => $images
            ]);
        }

        $path = public_path('assets/img/foto_gallerij/' . $allCateogries[0]);
        $images = File::allFiles($path);

        return view('gallery', [
            'data' => Gallery::all(),
            'categories' => $allCateogries,
            'selected_category' => $allCateogries[0],
            'images' => $images
        ]);
    }
}
