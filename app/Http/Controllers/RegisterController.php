<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function displayRegistrationForm()
    {
        return view('auth.register');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function register(Request $request)
    {
        try {
            User::create($request->all());
            return redirect()->back()->with('message', 'Successfully Registered!');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error', 'Failed to register']);
        }
    }
}
