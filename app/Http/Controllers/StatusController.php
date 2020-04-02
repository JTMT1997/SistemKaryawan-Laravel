<?php

namespace App\Http\Controllers;

use App\Http\Requests\StatusRequest;
use App\Status;

use Illuminate\Support\Str;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $status=Status::all();
       return view('status.index',compact('status'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('status.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StatusRequest $request)
    {
       
        $staatus= $request->all();
        $staatus['slug']=Str::slug($request->nama_status);

        Status::create($staatus);

        

        return redirect('status');
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
        
        $s= Status::findOrFail($id);
        return view('status.edit',[
            's'=>$s
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StatusRequest $request, $id)
    {
        $data=$request->all();
        $data['slug']=Str::slug($request->nama_status);
        $status=Status::findOrFail($id);

        
        $status->update($data);
        return redirect('status');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $status= Status::findOrFail($id);
        $status->delete();
        return redirect('status');
    }
}
