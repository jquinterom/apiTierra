<?php


namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

class AuthController extends Controller
{
    public function register(Request $request): \Illuminate\Http\JsonResponse
    {

        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required',
                'confirm_password' => 'required|same:password',
            ]
        );

        if($validator->fails()){ // Han habido fallos
            return response()->json([
                'error'=>$validator->erros(),
                ],422);
        }

        // Valores a guardar
        $input = $request->all();
        $input['password'] = bcrypt($request->get('password'));
        $user = User::create($input);
        $token = $user->createToken('tierraApp')->accessToken;

        return response()->json([
            'token'=>$token,
            'user'=>$user,
        ]);
    }



    public function testOauth(Request $request){
        $user = Auth::user();
        return response()->json([
            'user' => $user
        ]);
    }

}
