<?php

namespace App\Services;

use App\Models\User;
use Exception;

class UserService
{


    public function storeUser($inputs)
    {  
            $user = User::create($inputs);

            return $user;

    }

    public function clearOtpData($user)
    {
        $userData = [
            'otp_code'       => null,
            'otp_token'      => null,
            'otp_expires_at' => null,
        ];
        $user->update($userData);
    }

    public function updateUser($user, $userData)
    {
        try {
            $user->update($userData);
            return $user;
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function getUserByPhone($phone)
    {

        $user = User::where('phone', $phone)->first();
        return $user;
    }

    public function checkPhoneExists(string $phone)
    {
        return User::where('phone', $phone)->exists();
    }

    public function getUserByEmail($email)
    {
        $user = User::where('email', $email)->first();
        return $user;
    }
    public function checkEmailExists($email)
    {
        return User::where('email', $email)->exists();
    }

    public function getUserRole($user)
    {
        $roles = [
            'admin' => 1,
            'user'  => 2,
        ];

        return $roles[$user->role] ?? null;
    }


    public function hasHigherAccess($user, $role)
    {
        $roleLevel = $this->getUserRole($user);
        $requiredLevel = [
            'admin' => 1,
            'user' => 2,
        ][$role] ?? 99;

        return $roleLevel <= $requiredLevel;
    }

    public function updateUserPassword($user, $password)
    {
        try {
            $user->update([
                'password' => $password,
            ]);
            return $user;
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function forceDeleteUser($user)
    {
        try {
            $user->forceDelete();
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
}
