<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    protected UserModel $model;

    public function __construct(UserModel $model)
    {
        $this->model = $model;
    }

    public function getUsers()
    {
        $data = $this->model->getAllUsers();

        return response()->json($data);
    }

    public function updateUser(Request $request, $id)
    {
        try {

            $input = $request->all();

            $data = $this->model->updateUser($input, $id);

            return response()->json($data);

        } catch (ValidationException $e) {

            return response()->json("No successfully " . $e->getMessage());

        }
    }

    public function deleteUser($id)
    {
        try {

            $data = $this->model->deleteUser($id);

            return response()->json($data);

         } catch (ValidationException $e) {

            return response()->json("No successfully " . $e->getMessage());

        }
    }
}
