<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call('TingkatKerusakan');
        $this->call('Pekerjaan');
        $this->call('Infrastruktur');
    }

}

/**
 * 
 */
class TingkatKerusakan extends Seeder
{
	
	public function run()
	{
		DB::table('tingkat_kerusakan')->truncate();
		$data = array(
			['level'=>'berat','created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:s')],
			['level'=>'sedang','created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:s')],
			['level'=>'ringan','created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:s')]
		);
		foreach($data as $key => $val){
			DB::table('tingkat_kerusakan')->insert($val);
		}
	}
}


class Pekerjaan extends Seeder
{
	
	public function run()
	{
		DB::table('pekerjaan')->truncate();
		$data = array(
			['posisi'=>'pelapor','created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:s')],
			['posisi'=>'bpbd','created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:s')],
			['posisi'=>'dinas','created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:s')]
		);
		foreach($data as $key => $val){
			DB::table('pekerjaan')->insert($val);
		}
	}
}

class Infrastruktur extends Seeder
{
	
	public function run()
	{
		DB::table('infrastrukturs')->truncate();
		$data = array(
			['nama'=>'Jalan','created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:s')],
			['nama'=>'Jembatan','created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:s')],
			['nama'=>'Sekolah','created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:s')]
		);
		foreach($data as $key => $val){
			DB::table('infrastrukturs')->insert($val);
		}
	}
}
