<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function auth(Request $request)
    {
        $response = HTTP::post('https://auth.etna-alternance.net/identity', [
            'login' => $request->login,
            'password' => $request->password,
        ]);

        $userJSON = response($response)->getContent();
        $user = json_decode($userJSON);
        if($user->login=='deborah.cristiani'||$user->login=='elmarg_h'||$user->login=='daime_a'){
            $user->groups[]='super-admin';
        }
        Session::put('user', $user);

        $rp = $response->getHeader('set-cookie')[0];

        $rp = str_replace(";", "&", $response->getHeader('set-cookie')[0]);
        parse_str($rp, $cookie);
        if (isset($_COOKIE['authenticator'])) {
            unset($_COOKIE['authenticator']);
        }

        setcookie('authenticator', $cookie['authenticator']);

        return redirect('/trombi'); 
    }

    
}
