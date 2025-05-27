<?php

namespace App\Respositories;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileRepository
{
    public function findProfile()
    {
        $user_id = Auth::user()->id;
        return User::where('id', $user_id)->first();
    }

    public function createOrUpdateProfile($data, $photo)
    {
        $profile = $this->findProfile();
        // dd($profile);
        $profile->update($data);
        return $profile;
    }
}
