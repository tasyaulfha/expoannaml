<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modelLaporan;
use App\User;

class LaporanMasukController extends Controller
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
        return view('laporanMasuk', compact('LaporanMasuk', 'user'));
    }
    public function edit($id){
    	$laporan = modelLaporan::find($id);
		// dd($laporan);
		return view('editDataLaporan', compact('laporan'));
	}
	
	public function update(Request $request, $id)
    {
        $input = $request->all();
		// dd($input);
		$laporan = modelLaporan::find($id);
		$laporan->status = $request->status;
		$laporan->save();
		return redirect()->route('laporanmasuk.show')->with('message', 'Success');
    }

     public function destroy($id)
    {
    	$laporan = modelLaporan::where('id',$id)->first();
        $laporan->delete();

        return redirect()->route('laporanmasuk.show')->with('alert-success','Data berhasil dihapus!');
    }
}
