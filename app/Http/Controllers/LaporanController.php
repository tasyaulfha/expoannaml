<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modelLaporan;
use App\TingkatKerusakan;
use App\Infrastruktur;
use Auth;
use App\user;
class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = modelLaporan::all();
        return view('indexpelapor',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = TingkatKerusakan::all();
        // dd($data);
        return view('laporkan',compact('data'));
    }
    public function createInfra()
    {
        $data = Infrastruktur::all();
        // dd($data);
        return view('laporkan',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {
        $data = "N";
        if($request->hasFile('file'))
        {
            $destination = "upload";
            $file = $request->file('file');
            $file->move($destination,$file->getClientOriginalName());
            $data="Y";
        }

        if($data = "Y"){
        $input = $request->all();
        $data = new modelLaporan();
        $data -> user_id = Auth::user()->id;
       $data->nama_infrastruktur = $input['nama_infrastruktur'];
       $data->jenis_kerusakan = $input['jenis_kerusakan'];
       $data->tingkat_kerusakan = $input['tingkat_kerusakan'];
       $data->deskripsi = $input['deskripsi'];
       $data->lokasi = $input['lokasi'];
       $data->status = "Belum terverifikasi";
       $data->file = $file->getClientOriginalName();
       // dd($data);
       $data->save();
       return redirect('laporanku')->with('alert-success','Berhasil Menambahkan Data!');
        }
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
    public function edit()
    {
        $data = modelLaporan::all('id',$id)->get();

        return view('editDataLaporan',compact('data'));
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
        $input = $request->all();
        dd($input);
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
