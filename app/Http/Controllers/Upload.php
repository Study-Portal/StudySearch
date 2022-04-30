<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Subject;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Storage;

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
//        dd($request->input('uploaded'));

        $upload = Storage::put($request->input('uploaded'), 'uploads');

        $path = \Illuminate\Support\Facades\Storage::path($request->input('uploaded'));

        Post::query()->create(
            [
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'user_id' => auth()->id(),
                'subject_id' => $request->input('subject'),
                'private' => $request->input('privacy'),
                'directory' => $path
            ]
        )->save();

        return redirect(route('dashboard')); //TEMPORARY
    }
}
