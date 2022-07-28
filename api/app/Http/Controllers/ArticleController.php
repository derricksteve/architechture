<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Categorie;

class ArticleController extends Controller
{
    
    public function getAll(){
        $articles=Article::with('categorie')->get();

       
       return response()->json($articles);
    }

    public function getCategorie(){
        $categories=Categorie::all();
        return response()->json($categories);


    }

    public function getOnePost($id){
        $articles=Article::with('categorie')->where('id',$id)->get();
        return response()->json($articles);
    }
    public function detail($id){
        $articles=Article::with('categorie')->where('id',$id)->first();
        return response()->json($articles);


    }

    public function store(Request $request){

        Article::create([
            'titre'=>$request->titre,
            'contenue'=>$request->contenue,
            'categorie_id'=>$request->categorie
        ]);

        $articles=Article::with('categorie')->get();
        return response()->json($articles);
    }
    public function update($id){
       $article= Article::with('categorie')->where('id',$id)->first();
       return response()->json([
        "article"=>$article,
        'categories'=>Categorie::all()
    ]);
    }
    public function storeUpdate(Request $request){
        Article::find($request->id)->update([
            'titre'=>$request->titre,
            'contenue'=>$request->contenue,
            'categorie_id'=>$request->categorie

        ]);
        $articles=Article::with('categorie')->get();
        return response()->json($articles);

    }

    public function delete($id){
        Article::find($id)->delete();
        $articles=Article::with('categorie')->get();
        return response()->json($articles);
    }
}
