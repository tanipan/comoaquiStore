<?php

namespace App\Models;

use App\Models\Articles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Stock extends Model
{
    use HasFactory;

    protected $fillable = ['order', 'article_id', 'units'];

    public function getArticleNameAttribute()
    {
        $article = Articles::find($this->article_id);
        return $article->name;
    }
}
