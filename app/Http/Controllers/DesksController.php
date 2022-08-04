<?php

namespace App\Http\Controllers;

use App\Http\Requests\DeskRequest;
use App\Http\Resources\DeskResource;
use App\Models\Api\Desks;

class DesksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return  DeskResource::collection(Desks::all());
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return DeskResource
     */
    public function store(DeskRequest $request)
    {
        $createDesk=Desks::create($request->validated());
        return  new  DeskResource($createDesk);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Api\Desks  $desks
     * @return DeskResource
     */
    public function show(Desks $desks)
    {
        return new DeskResource($desks);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Api\Desks  $desks
     * @return \Illuminate\Http\Response
     */
    public function edit(Desks $desks)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param \App\Models\Api\Desks $desks
     * @return Desks
     */
    public function update(DeskRequest $request, $desks)
    {
        $desks=Desks::find($desks)->update([
         'name'=>$request->name,
     ]);

        return  $desks;
    }
//
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Api\Desks  $desks
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $desks=Desks::find($id);
        $desks->delete();
        return  response(null, \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}
