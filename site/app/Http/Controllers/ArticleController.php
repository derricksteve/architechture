<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;
use App\Models\Artilce;


class ArticleController extends Controller
{

	public function index(){

		$articles=json_decode( Http::get('http://localhost:7070/api/getarticle'));
		$categories=json_decode( Http::get('http://localhost:7070/api/getcategorie'));

		
		return view('index',compact('articles','categories'));

	}

	public function listAdmin(){
		$articles=json_decode( Http::get('http://localhost:7070/api/getarticle'));

		//dd($articles);
		return view('list_article',compact('articles'));


	}

	public function getid($id){
		$articles=json_decode( Http::get('http://localhost:7070/api/getcategoriebycatego/'.$id));
		$categories=json_decode( Http::get('http://localhost:7070/api/getcategorie'));

		//dd($categories);

		return view('index',compact('articles','categories'));
		

	}
	public function detail($id){

			$article=json_decode( Http::get('http://localhost:7070/api/getonepost/'.$id));
		$categories=json_decode( Http::get('http://localhost:7070/api/getcategorie'));
		//dd($article);

		return view('detail_article',compact('article','categories'));

	}
	public function admin(){
		return view('login');
	}
	public function create(){
		$categories=json_decode(Http::get('http://localhost:7070/api/cat/all'));
		return  view('create_article',compact('categories'));
	}
	public function store(Request $request){
		$articles=json_decode( Http::post('http://localhost:7070/api/admin/store',$request));
		return view('list_article',compact('articles'));

	}
	public function show($id){
			$response=json_decode(Http::get('http://localhost:7070/api/admin/article/update/'.$id));
			$article=$response->article;
			$categories=$response->categories;
			//dd($article,$categories);
		return view('update_article',compact('article','categories'));	
	}
	public function updateStore(Request $request){
			$articles=json_decode( Http::post('http://localhost:7070/api/admin/post/update',$request));
		return view('list_article',compact('articles'));

	}

	public function delete($id){
		$articles=json_decode(Http::get('http://localhost:7070/api/admin/article/delete/'.$id));
		return view('list_article',compact('articles'));

	}
    
}
