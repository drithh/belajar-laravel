<?php

namespace App\Http\Controllers;

use App\Models\InventoryImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InventoryImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InventoryImage  $inventoryImage
     * @return \Illuminate\Http\Response
     */
    public function show(InventoryImage $inventoryImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InventoryImage  $inventoryImage
     * @return \Illuminate\Http\Response
     */
    public function edit(InventoryImage $inventoryImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InventoryImage  $inventoryImage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InventoryImage $inventoryImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InventoryImage  $inventoryImage
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('inventory_images')->where('id', $id)->delete();
    }
}
