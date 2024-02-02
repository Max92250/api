<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Show the login form.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Handle user login.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $token = $user->createToken('laravel_token')->plainTextToken;
            $sessionKey = 'user_data_' . $user->email;


            session([$sessionKey => [
                'id' => $user->id,
                'name' => $user->name,
                'email'=>$user->email
             
                
            ]]);
            $users = $request->user();
            $request->session()->put('user',$users->email);
            return redirect('')->with('success', 'Registration successful. Please log in.');
        }

       
        return response()->json(['error' => 'Invalid credentials.'], 401);

        
    }
    public function logout(Request $request)
    {
       
        if ($request->user()) {
            $user = $request->user();
         
           
            $user->tokens()->delete();
    
        
            Auth::logout();
            
            $user = $this->getCurrentUser();
            
            if ($user) {
                $storageKey = 'user_cart_' . $user->id;
                
                localStorage.removeItem($storageKey);
            }
    
           
            $request->session()->flush();
            return redirect('login')->with('success', 'Please log in.');
        }
    }
    
    function getCurrentUser() {
       
        if (Auth::check()) {
          
            return Auth::user();
        }
    
       
        return null;
    }
    

}
