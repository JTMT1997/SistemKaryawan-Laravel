<?php

namespace App\Http\Controllers;

use App\Http\Requests\PendidikanRequest;
use Illuminate\Support\Str;
use App\Pendidikan;
class PendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendidikan=Pendidikan::all();
        return view('pendidikan.index',['pendidikan'=>$pendidikan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pendidikan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PendidikanRequest $request )
    {
        $pendidikan = $request->all();
        $pendidikan['slug'] = Str::slug($request->id);
        Pendidikan::create($pendidikan);
        return redirect('pendidikan');
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
    public function edit($id)
    {
        $pendidikan=Pendidikan::findOrFail($id);
        return view('pendidikan.edit',['pendidikan'=>$pendidikan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PendidikanRequest $request, $id)
    {
        $data=$request->all();
        $pendidikan=Pendidikan::findOrFail($id);
        $pendidikan->update($data);
     return redirect('pendidikan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    //
    }
}
