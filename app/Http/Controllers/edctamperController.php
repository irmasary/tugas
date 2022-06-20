<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class edctamperController extends Controller
{
    public function index()
    {
    	$data_tamper = \App\edctamper::all();
    	return view('data.edc',compact('data_tamper'));
    }

     public function create(Request $request)
    {
    	\App\edctamper::create($request->all());
		return redirect('/edctamper')->with('toast_success', 'Data Berhasil Tersimpan!');
    }

     public function delete($id)
    {
         $edctamper = \App\edctamper::find($id);
         $edctamper->delete($edctamper);
         return back()->with('info', 'Data Berhasil dihapus!');
    }
}
