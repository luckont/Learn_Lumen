<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserModel extends User
{
    protected User $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function createUser($input)
    {
        $existingUser = $this->user->where('email', $input['email'])->first();

        if ($existingUser) {
            return "Email has been used";
        }

        $newUser = new User();
        $newUser->username = $input['username'];
        $newUser->email = $input['email'];
        $newUser->password = Hash::make($input['password']);
        $newUser->save();

        return $newUser;
    }

    public function getUser($input)
    {

        $user = $this->user->where('email', $input['email'])->first();

        if ($user && Hash::check($input["password"], $user->password)) {
            return $user;
        } else {
            return "No user";
        }
    }

    public function getAllUsers()
    {
        $data = $this->user->get();
        return $data;
    }

     public function updateUser($input, $id)
    {
        $user = $this->user->find($id);

        if (!$user) {
            return "User not found";
        }

        $existingUser = $this->user->where('email', $input['email'])->first();

        if ($existingUser) {
            return "Email has been used";
        }

        $user->username = isset($input['username']) ? $input['username'] : $user->username;
        $user->email = isset($input['email']) ? $input['email'] : $user->email;
        $user->password = isset($input['password']) ? Hash::make($input['password']) : $user->password;
        
        $user->save();
        

        return $user;
    }

    public function deleteUser($id)
    {
        $user = $this->user->find($id);
        $user->delete();

        return "Deleted user $id successfully";
    }
}
