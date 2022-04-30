<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Subject;
use Illuminate\Http\Request;

class Upload extends Controller
{
    public function view()
    {
        return view('create', [
            'subjects' => Subject::query()->get('*')
        ]);
    }

    public function SaveIt(Request $request)
    {
        $p = Post::query()->create(
            [
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'subject_id' => $request->input('subject'),
                'private' => $request->input('privacy')
            ]
        )->save();
    }
}
