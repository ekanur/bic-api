<?php
namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Validator;


class UserController extends Controller
{
    public function login(){
        if(Auth::attempt(['username' => request('username'), 'password' => request('password')])){
            $user = Auth::user();
            $success['token'] =  $user->createToken('nApp')->accessToken;
            return $this->json($success);
        }
        else{
            return $this->json(array("messsage"=>'Unauthorized'), 401);
        }
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            // 'c_password' => 'required|same:password',
        ]);

        if ($validator->fails()) {
            return $this->json($validator->errors(), 401);            
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);

        if($this->hasRegistered($request)){
        	return $this->json("Username or Email unavailable", 401);
        }
        $user = User::create($input);
        $success['token'] =  $user->createToken('nApp')->accessToken;
        $success['name'] =  $user->name;

        return $this->json($success);
    }

    public function hasRegistered($request){
    	$user = User::where('username', '=', $request->username)->orWhere('email', '=', $request->email)->count();

    	return ($user > 0);
    }

    public function detail()
    {
        $user = Auth::user();
        return $this->json($user);
    }
}
