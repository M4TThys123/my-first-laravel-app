<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function create() {

        return view('auth.register');
    }
    public function store() {
        $validatedAtributes = request()->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', Password::min(6), 'confirmed'],
        ]);

        $user = User::create($validatedAtributes);
        
        Auth::login($user);

        return redirect('/');
    }
}
