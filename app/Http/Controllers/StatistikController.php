<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class StatistikController extends Controller
{
    function indexBpbd()
    {
    	$data = DB::table('laporans')
    		->select(DB::raw('tingkat_kerusakan as tingkat_kerusakan'),
    				DB::raw('count(*) as number'))
    		->groupBy('tingkat_kerusakan')
    		->get();
    	$array[] = ['TingkatKerusakan','Number'];
    	foreach ($data as $key => $value) {
    		# code...
    		$array[++$key] =[$value->tingkat_kerusakan,$value->number];
			}
			return view ('/statistikbpbd')->with('tingkat_kerusakan',json_encode($array));
    }

    function indexDinas()
    {
        $data = DB::table('laporans')
            ->select(DB::raw('tingkat_kerusakan as tingkat_kerusakan'),
                    DB::raw('count(*) as number'))
            ->groupBy('tingkat_kerusakan')
            ->get();
        $array[] = ['TingkatKerusakan','Number'];
        foreach ($data as $key => $value) {
            # code...
            $array[++$key] =[$value->tingkat_kerusakan,$value->number];
            }
            return view ('/statistikdinas')->with('tingkat_kerusakan',json_encode($array));
    }
}
