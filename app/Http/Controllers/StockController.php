<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use App\Models\Articles;
use Illuminate\Http\Request;
use App\Http\Requests\CreateStockRequest;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stocks = Stock::paginate(10);
        $articles = Articles::all();
        return view('admin.stock.stock.index', compact('stocks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $articles = Articles::all();

        return view('admin.stock.stock.create', compact('articles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateStockRequest $request)
    {
        Stock::create([
            'order' => $request->order,
            'article_id' => $request->article_id,
            'units' => $request->units,
        ]);

        return redirect()->route('admin.stock.list');
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
    public function edit(Stock $stocks)
    {
        $articles = Articles::all();
        return view('admin.stock.stock.edit', compact('stocks', 'articles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateStockRequest $request, Stock $stocks)
    {
        $stocks->order = request('order');
        $stocks->article_id = request('article_id');
        $stocks->units = request('units');

        $stocks->save();
        return redirect()->route('admin.stock.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stock $stocks)
    {
        $stocks->delete();

        return redirect()->route('admin.stock.list');
    }

    public function setStoks(Request $request)
    {
        try {
            // $status = true;
            $stock = Stock::create([
                'order' => $request->order,
                'article_id' => $request->article_id,
                'units' => $request->units,
            ]);
        } catch (\Throwable $th) {
            $stock = false;
        }
        return response()->json(['status' => (bool) $stock]);
    }
}
