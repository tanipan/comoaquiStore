<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use App\Models\Articles;
use App\Models\Category;
use App\Models\ImageArticle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\CreateArticleRequest;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Articles::paginate(10);
        $categories = Category::all();
        return view('admin.stock.articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('admin.stock.articles.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateArticleRequest $request)
    {
        $hidden = false;

        if ($request->hidden == 1) {
            $hidden = true;
        }

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public');
        }

        Articles::create([
            'name' => $request->name,
            'order' => $request->order,
            'hidden' => $hidden,
            'image' => $path,
            'price' => $request->price,
            'ean' => $request->ean,
            'category_id' => $request->category,
        ]);
        return redirect()->route('admin.articles.list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Articles $article)
    {
        $categories = Category::all();
        return view(
            'admin.stock.articles.edit',
            compact('article', 'categories')
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateArticleRequest $request, Articles $article)
    {
        $hidden = false;
        // dd($request->all());
        if ($request->hidden != '') {
            $hidden = true;
        }

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public');
            $imageDeleted = $article->image;
            Storage::delete($imageDeleted);
        } else {
            $path = $article->image;
        }
        $article->name = request('name');
        $article->order = request('order');
        $article->hidden = $hidden;
        $article->image = $path;
        $article->price = request('price');
        $article->ean = request('ean');
        $article->category_id = request('category');
        $article->save();

        return redirect()->route('admin.articles.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Articles $article)
    {
        $article->delete();

        return redirect()->route('admin.articles.list');
    }

    public function getStocks(Request $request)
    {
        $categories = Category::all();
        $categoryArray = [];

        foreach ($categories as $category) {
            $articles = Articles::where('category_id', $category->id)->get();
            $categoryArray[] = [
                'categoria' => $category,
                'articulos' => $articles,
            ];
        }

        return response()->json($categoryArray);
    }

    public function orderList(Request $request)
    {
        $order = $request->order;
        $stocks = Stock::selectRaw('article_id, sum(units) as stock')
            ->where('order', $order)
            ->groupBy('article_id')
            ->get();
        foreach ($stocks as $stock) {
            $article = Articles::where('id', $stock->article_id)->first();
            $articleArray[] = [
                'articulo' => [
                    'nombre' => $article->name,
                    'id' => $article->id,
                    'unidades' => $stock->units,
                ],
            ];
        }
        return response()->json($articleArray);
    }
}
