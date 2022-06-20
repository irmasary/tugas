<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\data;
use App\transaksi;

use App\Exports\dataExport;
use App\Imports\dataImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        $data_edc = \App\data::paginate(10);
        return view('data.inputdataa',compact('data_edc'));      
    }

    public function dataexport(){
        return Excel::download(new DataExport,'inputdataa.xlsx');
    }

    public function dataimport(Request $request){
        $file = $request->file('file');
        $namafile = $file->getClientOriginalName();
        $file->move('data', $namafile);

        Excel::import(new DataImport, public_path('/data/'.$namafile));
        return redirect('inputdataa');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        \App\data::create($request->all());
        //return $request->all();
        return redirect('/inputdataa')->with('toast_success', 'Data Berhasil Tersimpan!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //dd($request->all());
        data::create([
            'sn' => $request->sn,
            'jenis perangkat' => $request->jenis_perangkat,
            'type' => $request->type,
            'dio' => $request->dio,
            'keterangan' => $request->keterangan,
       ]);

        return redirect('simpan-data');

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
        $data = \App\data::find($id);
        return view('data/edit',['data' => $data]);
        //dd($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $data = \App\data::find($id);
         $data->update($request->all());
         return redirect('/inputdataa')-> with('toast_success','Data Berhasil DiUpdate ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
         $data = \App\data::find($id);
         $data->delete($data);
         return back()->with('info', 'Data Berhasil dihapus!');
    }

    
}
