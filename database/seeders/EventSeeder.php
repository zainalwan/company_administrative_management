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

class EventSeeder extends Seeder
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
			DB::table('events')->insert([
				'name' => $random->make()->name(),
				'description' => $random->make()->paragraph(2),
				'date' => $random->make()->date(),
				'created_at' => date('Y-m-d H:i'),
				'updated_at' => date('Y-m-d H:i')
			]);
		}
    }
}
