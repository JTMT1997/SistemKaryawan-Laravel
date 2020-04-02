<?php

namespace App\Http\Controllers;


use App\Http\Requests\PosisiRequest;
use App\Posisi;
use App\Pendidikan;
use Illuminate\Support\Str;


class PosisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posisi=Posisi::with([
            'pospend'
        ])->get();

        // $posisi=Posisi::all();
        return view('posisi.index',['posisi'=>$posisi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       

        $posisi=Posisi::all();
        $pendidikan=Pendidikan::all();
        return view('posisi.create',compact('posisi','pendidikan'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PosisiRequest $request )
    {

        $posisi= $request->all();
        $posisi['slug']=Str::slug($request->nama_jabatan);

        Posisi::create($posisi);

        return redirect('posisi');
        

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
        $pendidikan = Pendidikan::all();
        $posdit=Posisi::findOrFail($id);
        
        return view('posisi.edit',compact('posdit','pendidikan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PosisiRequest $request, $id)
    {

        $data=$request->all();
        $data['slug']=Str::slug($request->jabatan);
        $posisi=Posisi::findOrFail($id);
        $posisi->update($data);

        
        return redirect('posisi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $u=Posisi::findOrFail($id);
        $u->delete();
        return redirect('posisi');
    }
}
