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
        $user = User::create($input);

        $phpMailer = new PHPMailer(true);
        $phpMailer->SMTPDebug = 0;
        $phpMailer->isSMTP();
        $phpMailer->Host = env('EMAIL_HOST');
        $phpMailer->SMTPAuth = true;
        $phpMailer->Username = env('EMAIL_USERNAME');
        $phpMailer->Password = env('EMAIL_PASSWORD');
        $phpMailer->SMTPSecure = 'ssl';
        $phpMailer->Port = 465;
        $phpMailer->setFrom('anhd10315@gmail.com', 'anhduong');
        $phpMailer->addAddress($email);
        $phpMailer->isHTML(true);
        $phpMailer->Subject = 'Email verification';
        $phpMailer->Body = "<h2>You have Register! Welcome to KoLa Learning <br> 
        Wish you a happy learning day with KoLa </h2>";
        $phpMailer->send();
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
            return response()->json(['message' => 'true', 'token' => $success, 'user' => $user]);
        } else {
            return response()->json(['message' => 'Unauthorised'], 401);
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
