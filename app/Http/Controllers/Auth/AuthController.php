<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function steamRedirect()
    {
        return Socialite::driver('steam')->redirect();
    }

    public function steamCallback()
    {
        $steamUser = Socialite::driver('steam')->user();

        $user = User::updateOrCreate([
            'steam_id' => $steamUser->id,
        ], [
            'nickname' => $steamUser->nickname,
            'avatar' => $steamUser->avatar,
        ]);

        Auth::login($user);

        return redirect()->route('app.index');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}
