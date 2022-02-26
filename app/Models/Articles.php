<?php

namespace App\Models;

use App\Models\Stock;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Articles extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'name',
        'order',
        'hidden',
        'image',
        'price',
        'ean',
        'category_id',
    ];

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

    protected $appends = ['stock'];

    public function getFileUrlAttribute()
    {
        return Storage::url($this->attributes['image']);
    }

    public function getCategoryNameAttribute()
    {
        $category = Category::find($this->category_id);
        return $category->name;
    }

    public function getStockAttribute()
    {
        $stocks = Stock::where('article_id', $this->id)->get();

        $total = 0;
        foreach ($stocks as $stock) {
            $total += $stock->units;
        }
        return $total;
    }
}
