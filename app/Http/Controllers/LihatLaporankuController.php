<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modelLaporan;
use App\User;
use Auth;

class LihatLaporankuController extends Controller
{
    public function show(Request $request)
    {
        $user_id = auth::user()->id;
        // dd($user_id);
        $lapor = modelLaporan::where('user_id', $user_id)->get();
		// $user = User::where('pekerjaan', 'pelapor')->get();
        return view('laporanku', compact('lapor'));
    }
}
