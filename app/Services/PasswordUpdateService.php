<?php

namespace App\Services;

use App\Respositories\PasswordUpdateRepository;

class PasswordUpdateService
{
    protected $PasswordUpdateRespository;

    public function __construct(PasswordUpdateRepository $PasswordUpdateRespository)
    {
        $this->PasswordUpdateRespository = $PasswordUpdateRespository;
    }

    public function updatePassword(array $data)
    {
        // dd($data);
        return $this->PasswordUpdateRespository->updatePassword($data);
    }
}
