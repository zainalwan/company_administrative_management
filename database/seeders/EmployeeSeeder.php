<?php

/* 
 * Code that written below is belong to Zain Alwan Wima Irfani. You may
 * not use, share, modify, and study without the author's permission
 * (zainalwan4@gmail.com).
 *  */

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \App\Library\Zain\Random;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Random $random)
    {
        for($i = 0; $i < 30; $i++)
		{
			DB::table('employees')->insert([
				'name' => $random->make()->name(),
				'recruited_at' => date('d-m-Y'),
				'born' => $random->make()->date(1990),
				'address' => $random->make()->address(),
				'email' => $random->make()->email(),
				'created_at' => date('Y-m-d H:i'),
				'updated_at' => date('Y-m-d H:i')
			]);
		}
    }
}
