<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable=['titre','categorie_id','contenue'];

    public function categorie(){
        return $this->belongsTo('App\Models\Categorie','categorie_id');
    }
}
