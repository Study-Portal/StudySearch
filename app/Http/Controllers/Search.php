<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Tag;
use Illuminate\Http\Request;

class Search extends Controller
{
    public function view()
    {
        return view('search', [
            'subjects' => Subject::query()->get('*'),
            'tags' => Tag::query()->get('*'),
        ]);
    }
}
