<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\PasswordUpdateRequest;
use App\Http\Requests\ProfileRequest;
use App\Services\PasswordUpdateService;
use App\Services\ProfileService;
use Illuminate\Http\RedirectResponse;

class AdminProfileController extends Controller
{
    //create constructor for profile service created in app
    protected $profileService, $passwordUpdateService;

    public function __construct(ProfileService $profileService, PasswordUpdateService $passwordUpdateService)
    {
        $this->profileService = $profileService;
        $this->passwordUpdateService = $passwordUpdateService;
    }

    public function index()
    {
        return view('backend.admin.profile.index');
    }

    public function store(ProfileRequest $request)
    {
        // pass data and files to the service
        $this->profileService->saveProfile($request->validated(), $request->file('photo'));
        return redirect()->back()->with('success', 'Profile updated successfully');
    }

    public function setting()
    {
        return view('backend.admin.profile.setting');
    }

    public function passwordSetting(PasswordUpdateRequest $request) {
        // dd($request->validated());
        $result = $this->passwordUpdateService->updatePassword($request->validated());

        // If it's a redirect response (due to error), return it
        if ($result instanceof RedirectResponse) {
            return $result;
        }

        return redirect()->back()->with('success', 'Password updated successfully');
    }
}
