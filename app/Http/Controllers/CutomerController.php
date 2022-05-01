<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\Cutomer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CutomerController extends Controller
{
    public function login()
    {
        return view('partner.pages.login');
    }

    public function loginAction(LoginRequest $request)
    {
        $data  = $request->all();
        $check = Auth::guard('cutomer')->attempt($data);
        if($check) {
            // Đã login thành công!!!
            return response()->json(['status' => true]);
        } else {
            //Login thất bại
            return response()->json(['status' => false]);
        }
    }

    public function register()
    {
        return view('partner.pages.register');
    }

    public function registerAction(RegisterRequest $request)
    {

        $data = $request->all();
        $data['hash']       = Str::uuid();
        $data['password']   = bcrypt($request->password);
        Cutomer::create($data);

        return response()->json(['status' => true]);
    }

    public function logout()
    {
        Auth::guard("cutomer")->logout();
        return redirect("/");
    }
}
