<?php

namespace App\Http\Controllers;

use App\ItemLaundry;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ItemLaundryController extends Controller
{
    public function index()
    {
        return ItemLaundry::all();
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $item = new ItemLaundry();

        $item->client_id = $request->client;
        $item->status_id = 1;
        $item->weight = $request->weight;
        $item->cost = $request->cost;
        $item->pickup_date = Carbon::now();
        $item->description = $request->desc;

        $item->save();

    }


    public function show($id)
    {
        return ItemLaundry::findOrFail($id);
    }

    public function edit(ItemLaundry $itemLaundry)
    {
        //
    }


    public function update(Request $request, ItemLaundry $itemLaundry)
    {
        //
    }


    public function destroy(ItemLaundry $itemLaundry)
    {
        //
    }
}
