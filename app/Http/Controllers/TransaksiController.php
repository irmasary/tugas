<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\transaksi;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_mesin = \App\Transaksi::paginate(10);
        return view('data.transaksimesinedc',compact('data_mesin')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
          \App\Transaksi::create($request->all());
          return redirect('/transaksimesinedc')->with('toast_success', 'Data Berhasil Tersimpan!');
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
         $transaksi = \App\transaksi::find($id);
        return view('data/editdata',['transaksi' => $transaksi]);
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
         $transaksi = \App\transaksi::find($id);
         $transaksi->update($request->all());
         return redirect('/transaksimesinedc')-> with('toast_success','Data Berhasil DiUpdate ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
         $transaksi = \App\Transaksi::find($id);
         $transaksi->delete($transaksi);
         return back()->with('info', 'Data Berhasil dihapus!');
    }

    public function cetak(){
        return view('data.laporan');
    }

    public function cetaklaporan($tglawal, $tglakhir){
       // dd(["Tanggal Awal :".$tglawal, "Tanggal Akhir : ".$tglakhir]);

        $cetakdt = transaksi::whereBetween('tgl',[$tglawal,$tglakhir])->get();
        return view('data.cetaktransaksi',compact('cetakdt'));


    }
}
