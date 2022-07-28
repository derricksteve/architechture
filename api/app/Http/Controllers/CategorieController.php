<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;

class CategorieController extends Controller
{
    

    public function list(){
        return response()->json(Categorie::all());
      }
      public function update($id){
        return response()->json(Categorie::find($id));
      }

      public function storeUpdate(Request $request){
        Categorie::find($request->id)->update([
              'nom' => $request['nom'],
             
             
      
          ]);
          return response()->json(Categorie::all());
        }


        public function delete($id){
            Categorie::find($id)->delete();
            return response()->json(Categorie::all());
          }
    public function store(Request $request){
        Categorie::create([
            'nom'=>$request->nom
        ]);
        return response()->json(Categorie::all());
    }
}
