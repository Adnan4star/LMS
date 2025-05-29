<?php

namespace App\Respositories;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\traits\FileUploadTrait; // Import file upload trait

class ProfileRepository
{
    use FileUploadTrait; // use file upload trait



    public function findProfile()
    {
        $user_id = Auth::user()->id;
        return User::where('id', $user_id)->first();
    }

    public function createOrUpdateProfile($data, $photo)
    {
        $profile = $this->findProfile();

        //Handle file upload
        if ($profile) {
            $data['photo'] = $this->uploadFile($photo, 'user', $profile->photo);
        }

        $profile->update($data);
        return $profile;
    }
}
