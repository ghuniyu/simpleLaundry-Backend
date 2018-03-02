<?php

namespace App\Http\Controllers;

use App\ItemStatus;
use Illuminate\Http\Request;

class ItemStatusController extends Controller
{
    public function index()
    {
        ItemStatus::all();
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    public function show(ItemStatus $itemStatus)
    {
        //
    }

    public function edit(ItemStatus $itemStatus)
    {
        //
    }

    public function update(Request $request, ItemStatus $itemStatus)
    {
        //
    }

    public function destroy(ItemStatus $itemStatus)
    {
        //
    }
}
