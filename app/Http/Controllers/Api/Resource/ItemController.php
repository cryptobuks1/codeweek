<?php

namespace App\Http\Controllers\Api\Resource;

use App\ResourceItem;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ItemController extends Controller
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
        request()->validate([
            'label' => ['required']
        ]);

        return ResourceItem::create($request->toArray());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ResourceItem  $resourceItem
     * @return \Illuminate\Http\Response
     */
    public function show(ResourceItem $resourceItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ResourceItem  $resourceItem
     * @return \Illuminate\Http\Response
     */
    public function edit(ResourceItem $resourceItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ResourceItem  $resourceItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ResourceItem $resourceItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ResourceItem  $resourceItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(ResourceItem $resourceItem)
    {
        //
    }
}
