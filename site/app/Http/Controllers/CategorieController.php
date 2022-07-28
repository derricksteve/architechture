<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CategorieController extends Controller
{
    

    public function listCat(){
    	$categories=json_decode(Http::get('http://localhost:7070/api/cat/all'));
		return view('list_categorie',compact('categories'));
    }
    public function update($id){
		$categorie=json_decode(Http::get('http://localhost:7070/api/categorie/update/'.$id));
		
		return view('update_categorie',compact('categorie'));	
	}
	public function storeUpdate(Request $request){
		$categories=json_decode(Http::post('http://localhost:7070/api/categorie/update/store',$request));
		return view('list_categorie',compact('categories'));

	}
	public function delete($id){
		$categories=json_decode(Http::get('http://localhost:7070/api/categorie/delete/'.$id));
			return view('list_categorie',compact('categories'));

	}

	public function create(){
		return view('create_categorie');
	}

	public function store(Request $request){
		$categories=json_decode(Http::post('http://localhost:7070/api/categorie/store',$request));
		return view('list_categorie',compact('categories'));


	}
}
