<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modelLaporan;
use App\User;

class LaporanDinasController extends Controller
{
    public function show()
    {
  //       $LaporanMasuk = modelLaporan::whereHas('user', function ($query) {
		//     $query->where('file', null);
		// })->get();
		$LaporanMasuk = modelLaporan::all();
		$user = User::where('pekerjaan', 'pelapor')->get();
		// $data = $LaporanMasuk->where('user_id', $user['0']['']);
		// dd($data);
		// $a = $LaporanMasuk->toArray();
		// $LaporanMasuk['user'] = User::where('id', 2);
        // $user = User::where('id', 2)->get();
        // dd($LaporanMasuk['user_id']);
        return view('lihatLaporanDinas', compact('LaporanMasuk', 'user'));
    }

    public function edit($id){
    	$laporan = modelLaporan::find($id);
		// dd($laporan);
		return view('editDataDinas', compact('laporan'));
	}
	
	public function update(Request $request, $id)
    {
        $input = $request->all();
		// dd($input);
		$laporan = modelLaporan::find($id);
		$laporan->status = $request->status;
		$laporan->save();
		return redirect()->route('laporanDinas.show')->with('message', 'Success');
    }
}
