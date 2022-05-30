<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PHPMailer\PHPMailer\PHPMailer;

class UserController extends Controller
{

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'password' => 'required|string|min:6',
        ]);
        $email = $request->email;
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        // $success['remember_token'] = $this->genarateKey();
        $user = User::create($input);
        require 'PHPMailer/vendor/autoload.php';
        require 'PHPMailer/PHPMailer.php';

        $PHPMailer = new PHPMailer(true);

        $PHPMailer->SMTPDebug = 0;
        $PHPMailer->isSMTP();
        $PHPMailer->Host = 'smtp.gmail.com';
        $PHPMailer->SMTPAuth = true;
        $PHPMailer->Username = 'anhd10315@gmail.com';
        $PHPMailer->Password = 'vwsypottasjcjkwx';
        $PHPMailer->SMTPSecure = 'ssl';
        $PHPMailer->Port = 465;
        $PHPMailer->setFrom('anhd10315@gmail.com', 'anhduong');
        $PHPMailer->addAddress($email);
        $PHPMailer->isHTML(true);
        $PHPMailer->Subject = 'Email verification';
        $PHPMailer->Body = "<h2>You have Register! Welcome to KoLa Learning <br> 
        Wish you a happy learning day with KoLa </h2>";
        $PHPMailer->send();
        return response()->json(['success' => $user, 'message' => 'Please check your Email or Spam your Email']);
    }

    // public function genarateKey()
    // {
    //     return hash_hmac('sha256', str_random(40), config('app.key'));
    // }


    public function postLogin(Request $request)
    {
        if (Auth::attempt(['email' => request('email'), 'password' => request('password'), 'type' => 2])) {
            $user = Auth::user();
            $user = $request->user();
            $success['token'] = $user->createToken('MyApp')->accessToken;
            return response()->json(['success' => $success, 'user' => $user]);
        } else {
            return response()->json(['error' => 'Unauthorised'], 401);
        }
    }

    public function details()
    {
        $user = Auth::user();
        return response()->json(['message' => 'Successfully', 'success' => $user]);
    }

    public function logout(Request $request)
    {
        $token = $request->user()->token();
        $token->revoke();
        $response = ['message' => 'You have been successfully logged out!'];
        return response($response, 200);
    }
}
