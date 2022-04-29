<?php

namespace App\Http\Controllers;

use App\Models\Save;
use App\Models\User;
use Illuminate\Http\Request;

class Saved extends Controller
{
    public function view()
    {
        return view('saved', [
            'saves' => Save::query()->where('saves.user_id', auth()->id())->get()
        ]);
    }
}
