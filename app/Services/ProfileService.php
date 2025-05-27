<?php

namespace App\Services;

use App\Respositories\ProfileRepository;

class ProfileService
{
    protected $profileRepository;

    public function __construct(ProfileRepository $profileRepository)
    {
        $this->profileRepository = $profileRepository;
    }

    public function saveProfile(array $data, $photo = null)
    {
        // dd($data);
        return $this->profileRepository->createOrUpdateProfile($data, $photo);
    }
}
