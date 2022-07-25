<?php

namespace App\Http\Controllers;

use App\Models\Post;
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

    public function doSearch(Request $request)
    {
        $data = Post::search($request->input('search'))
            ->where('subject_id', $request->input('subject'))
            ->where('private', 0);

        return view('results', [
            'results' => $data->paginate(10),
        ]);
    }
}
