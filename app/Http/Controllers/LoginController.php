<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;

class LoginController extends Controller
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
    public function showLoginForm()
    {
        return view("login");
    }
    public function loginUser(Request $request)
    {
        $input = $request->all();

        $data = $this->model->getUser($input);

        return response()->json($data);

    }
}
