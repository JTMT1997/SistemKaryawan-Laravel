<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\KaryawanRequest;
use App\Karyawan;
use App\Status;
use App\Posisi;
use App\Pendidikan;
use App\SlackService;
use PDF;
use Illuminate\Support\Str;


class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karyawan=Karyawan::with(["backpend",'tostatus','tojabatan'
        ])->get();
        return view('karyawan.index',compact('karyawan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $karyawan=Karyawan::all();
        $pendidikan=Pendidikan::all();
        $posisi=Posisi::all();
        $status=Status::all();
        return view('karyawan.create',compact('karyawan','pendidikan','posisi','status'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KaryawanRequest $request )
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->nama);
        $slack = new SlackService();
        $slack->slackMessage(Karyawan::create($data));
        return redirect('karyawan');
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
        $pendidikan=Pendidikan::all();
        $posisi=Posisi::all();
        $status=Status::all();
        $item= Karyawan::findOrFail($id);
        return view('karyawan.edit',compact('item','pendidikan','status','posisi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(KaryawanRequest $request, $id)
    {
        $a=$request->all();
        $a['slug']=Str::slug($request->nama);
        $item=Karyawan::findOrFail($id);
        $item->update($a);
        return redirect('karyawan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $item=Karyawan::findOrFail($id);
        $slack = new SlackService();
        $slack->slackMessage( 'ID '. $id . ' telah terhapus');
        $item->delete();
        return redirect('karyawan');
    }
    public function generateInvoice($id)
    {
        $invoice = Karyawan::with(['backpend','tostatus','tojabatan'])->find($id);
        $pdf = PDF::loadView('karyawan.print', compact('invoice'))->setPaper('a4', 'landscape');
        return $pdf->stream();
    }
    public function printall()
    {
        $karyawan=Karyawan::with(["backpend",'tostatus','tojabatan'
        ])->get();
        $pdf = PDF::loadView('karyawan.printall', compact('karyawan'))->setPaper('a4', 'landscape');
        return $pdf->stream();
    }
}
