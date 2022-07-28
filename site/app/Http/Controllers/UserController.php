<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{


	public function create(Request $request){

		$token=json_decode( Http::post('http://localhost:7070/api/user/create',$request));

		$users=json_decode(Http::get('http://localhost:7070/api/user/all'));
		//$categories=json_decode( Http::get('http://localhost:7070/api/getcategorie'));

		return view('list_user',compact('users'));
		
	}
	public function login(Request $request){

		return view('login');
		
	}

	public function listUser(){

		$users=json_decode(Http::get('http://localhost:7070/api/user/all'));
		//$categories=json_decode( Http::get('http://localhost:7070/api/getcategorie'));

		return view('list_user',compact('users'));

	}
	public function register(Request $request){
		$user=json_decode( Http::post('http://localhost:7070/api/user/login',$request));

		if($user !=null &&  $user->email==$request['email']) {
			Session::put('type_user', $user->type_user->nom_type);
		
			$articles=json_decode( Http::get('http://localhost:7070/api/getarticle'));

		
			return view('list_article',compact('articles'));
		}

		return view('login');

	}

	public function createuser(){
		return view('create_user');
	}
	public function update($id){
		$user=json_decode(Http::get('http://localhost:7070/api/user/update/'.$id));
		//dd($user);
		return view('update_user',compact('user'));	
	}


	public function delete($id){
		$users=json_decode(Http::get('http://localhost:7070/api/user/delete/'.$id));
		return view('list_user',compact('users'));

	}

	public function storeUpdate(Request $request){

		$users=json_decode(Http::post('http://localhost:7070/api/user/update/store',$request));
		return view('list_user',compact('users'));


	}
	public function logOut(){
		Session::forget('type_user');
		redirect()->route('index');
	}
}
