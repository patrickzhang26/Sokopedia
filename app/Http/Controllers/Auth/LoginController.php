<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\Auth\Response;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    public function redirectTo() {
        $role = Auth::user()->role; 
        switch ($role) {
          case 'admin':
            return '/admin/home';
            break;
          case 'user':
            return '/user/home';
            break; 
      
          default:
            return '/'; 
          break;
        }
      }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', [ 'except' => ['logout', 'userLogout']]);
    }

    protected function sendLoginResponse(Request $request) {  
        $rememberMeExpireTime = 120;  
        $rememberTokenCookieKey = Auth::getRecallerName();  
        
        Cookie::queue($rememberTokenCookieKey, Cookie::get($rememberTokenCookieKey), $rememberMeExpireTime);  
        Cookie::queue('email', $request->email, 120);
        Cookie::queue('password', bcrypt($request->password), 120);

        $request->session()->regenerate();

        return $this->authenticated($request, $this->guard()->user())  
            ?: redirect()->intended($this->redirectPath());  
      } 

      
    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        Auth::guard('web')->logout();

        return redirect('/')->withCookie(cookie('carts', '', -1));
    }
}
