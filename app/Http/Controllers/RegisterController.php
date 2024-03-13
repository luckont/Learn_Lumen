<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\UserModel;
use App\Http\Validators\RegisterValidator;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class RegisterController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    protected $model;

    public function __construct(UserModel $model)
    {
        $this->model = $model;
    }

    public function showRegisterForm()
    {
        return view("register");
    }

    public function register(Request $request)
    {

        try {
            $input = $request->all();
            RegisterValidator::validateForm($request->all());

            $data = $this->model->createUser($input);

            return response()->json($data);
 
        } catch (ValidationException $e) {
            return response()->json("No successfully " . $e->getMessage());
        }
    }
}
