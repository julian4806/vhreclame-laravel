<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->requestDirectories(false, 'index');
    }
    public function showFolder(Request $request)
    {
        $requestedFolder = $request->change_folder;
        return $this->requestDirectories($requestedFolder, 'change');
    }
    public function addFolder(Request $request)
    {
        $folderToAdd = $request->folderToAdd;
        return $this->requestDirectories($folderToAdd, 'add');
    }
    public function deleteFolder(Request $request)
    {
        $folderToDelete = $request->folderToDelete;
        return $this->requestDirectories($folderToDelete, 'delete');
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
        dd($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Laat alle 
     */

    private function requestDirectories($request, $handle)
    {
        $path = 'assets/img/foto_gallerij/';
        // dd($request);
        if ($handle === 'index') { // just render all the folders
            $allFolders = Storage::disk('foto-gallerij')->allDirectories();
            $requestedFolder = $allFolders[0];
            $images = File::files(public_path($path . $requestedFolder));
        } elseif ($handle === 'change') { // change to a new folder
            $requestedFolder = $request;
            $images = File::files(public_path($path . $request));
        } elseif ($handle === 'add') { // add a new folder
            if (!$request) {
                return $this->requestDirectories(false, 'index');
            }
            $requestedFolder = $request; //new directory
            $pathWithNewFolder = $path . $requestedFolder;
            if (!file_exists($pathWithNewFolder)) {
                mkdir($pathWithNewFolder, 0777, true);
            }

            $images = File::files(public_path($path . $request));
        } elseif ($handle === 'delete') { // add a new folder
            $requestedFolder = $request; //new directory
            Storage::disk('foto-gallerij')->deleteDirectory($requestedFolder);

            $allFolders = Storage::disk('foto-gallerij')->allDirectories();
            $requestedFolder = $allFolders[0];
            $images = File::files(public_path($path . $requestedFolder));
        }


        
        $allFolders = Storage::disk('foto-gallerij')->allDirectories();

        return view('edit-images.index', [
            'images' => $images,
            'selectedFolder' => $requestedFolder,
            'allFolders' => $allFolders
        ]);
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Image $image)
    {
        //
    }
}
