<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Subject;
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
//        $upload = Storage::putFile('uploads', $request->file('file'), 'public');

        $upload = $request->file('uploaded')->storeAs('uploads', 'test');

        Post::query()->create(
            [
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'subject_id' => $request->input('subject'),
                'private' => $request->input('privacy'),
                'directory' => $upload
            ]
        )->save();

        return redirect(route('dashboard')); //TEMPORARY
    }
}
