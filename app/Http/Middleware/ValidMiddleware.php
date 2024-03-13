<?php

namespace App\Http\Middleware;

use App\Http\Validators\RegisterValidator;
use Illuminate\Validation\ValidationException;
use Closure;

class ValidMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        try {
            // $data = RegisterValidator::validateForm($request->all());
            // foreach($data as $key=>$a) {
            //     echo $key.": ".$a;
            //     echo "\n";
            // }
            // return response()->json("Thành công ");
            // return $next($request);

            $data = RegisterValidator::validateForm($request->all());
            echo $data['username'];
            // return redirect("/auth/login");
        } catch (ValidationException $e) {
            return response()->json("Thất bại " . $e->getMessage());
        }
    }
}
