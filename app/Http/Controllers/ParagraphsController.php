<?php

namespace App\Http\Controllers;

use App\Models\Paragraph;
use Illuminate\Http\Request;

class ParagraphsController extends Controller
{
    public static function index()
    {
        $paragraphs = Paragraph::all();

        return view('home', [
            'paragraphs' => $paragraphs
        ]);
    }
}
