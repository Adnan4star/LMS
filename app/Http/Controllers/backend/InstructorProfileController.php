<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequest;
use App\Models\User;
use App\Services\ProfileService;

class InstructorProfileController extends Controller
{
    //create constructor for profile service created in app
    protected $profileService;

    public function __construct(ProfileService $profileService)
    {
        $this->profileService = $profileService;
    }

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

    // Using Profile request (php artisan make:request Profile Request)
    public function store(ProfileRequest $request)
    {
        // dd($request->validated());
        
        // pass data and files to the service
        $this->profileService->saveProfile($request->validated(), $request->file('photo'));
        return redirect()->back()->with('success', 'Profile updated successfully');
    }
}
