<?php namespace Modules\Dashboard\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DashboardTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		\DB::table('dashboard')->insert(array(
			'name' => 'LMS - Laravel',
			'description' => 'It \' Simple',
		));
	}

}