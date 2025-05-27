<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class InstructorProfileController extends Controller
{
    public function index()
    {
        $instructor = User::get();
        // dd($instructor);
        return view('backend.instructor.profile.index');
    }

    public function setting()
    {
        return view('backend.instructor.profile.setting');
    }
}
