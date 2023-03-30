<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use App\Models\Contact;
use App\Models\Section;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $sections = Contact::join('sections', 'sections.id', '=', 'contacts.section_id')
            ->select('contacts.*', 'sections.section as section')
            ->get();
        // ->toArray();

        // dd($sections);
        return view('edit-contact.index', [
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
    public function show(Contact $contact)
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
            $path = 'assets/img/contact';
            $fileName = $request->section;
            $newImageName = $fileName . '.' . $request->file('image')->guessExtension();
            $request->image->move(public_path($path), $newImageName);
            $validated['image'] = $newImageName;
        }
        Contact::where('id', $id)->update($validated);
        return redirect(route('edit-contact.index'))->with('message', 'Record updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }

    // RENDER TO THE ACTUAL WEBPAGE
    public function contact(): View
    {
        return view('contact', [
            'data' => Contact::all(),
        ]);
    }
}
