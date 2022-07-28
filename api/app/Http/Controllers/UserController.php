<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

  public function  create(Request $data){
    $user= User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'type_user' => $data['type_user'],
        'password' => Hash::make($data['password']),
        
    ]);
    $token = $user->createToken($user->name);
    $token->plainTextToken ;
    return response()->json(           User::with('type_user')->get() );

  }


  public function list(){
    return response()->json(User::with('type_user')->get());
  }

  public function login(Request $request){
    $user=User::with('type_user')->where('email',$request['email'])->first();
    if(Hash::check($request['password'], $user->password))
         return response()->json($user);
    return null;
  }

  public function update($id){
    $user=User::with('type_user')->where('id',$id)->first();
    return response()->json($user);

  }
  public function storeUpdate(Request $request){
  User::find($request->id)->update([
        'name' => $request['name'],
        'email' => $request['email'],
        'type_user' => $request['type_user'],
       

    ]);
    return response()->json(User::with('type_user')->get());
  }
  public function delete($id){
    User::find($id)->delete();
    return response()->json(User::with('type_user')->get());
  }




}
