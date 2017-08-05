<?php
namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
        //
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        if (Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ])) {
            return $this->respond_success('Success', Auth::user());
        }

        return $this->respond_unauthorize();
    }

    public function logout()
    {
        Auth::logout();

        return $this->respond_success();
    }

    public function me()
    {
        if (Auth::check()) {
            return $this->respond_success('Success', Auth::user());
        }

        return $this->respond_error('No User were logged');
    }
}
