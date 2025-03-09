<?php

namespace App\Http\Controllers;

use App\Models\cruds;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CrudsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $crud = cruds::all();
        return view('cruds.index',compact('crud'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cruds.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        cruds::create(
            $request->all()
        );
        return response('Added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(cruds $cruds)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $crud = cruds::where('id',$id)->first();
        return view('cruds.edit',compact('crud'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $cruds =cruds::findOrFail($id);
        $cruds->update(
            $request->all()
        );
        return redirect()->route('cruds.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        cruds::destroy($id);
        return redirect()->route('cruds.index');
    }
}
