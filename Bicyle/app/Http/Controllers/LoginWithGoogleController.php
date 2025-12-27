<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginWithGoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->stateless()->user();
            $findUser = User::where('google_id', $user->id)->first();

            if($findUser){
                Auth::login($findUser);
            }else {
                // Kiểm tra nếu đã có user với email
                $existingUser = User::where('email', $user->email)->first();
                if ($existingUser) {
                    // Gán google_id vào user đã có
                    $existingUser->update([
                        'google_id' => $user->id
                    ]);
                    Auth::login($existingUser);
                }
                
            else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
                Auth::login($newUser);
            }
        }
            return redirect()->route('road.home');
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
