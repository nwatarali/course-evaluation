<?php

use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
        	'name' => 'Accounting & Finance'
        ]);
        DB::table('departments')->insert([
			'name' => 'Marketing'
		]);
		DB::table('departments')->insert([
			'name' => 'Architecture'
		]);
		DB::table('departments')->insert([
			'name' => 'Economics'
		]);
		DB::table('departments')->insert([
			'name' => 'Mass Communication'
		]);
		DB::table('departments')->insert([
			'name' => 'Business & Management'
		]);
		DB::table('departments')->insert([
			'name' => 'Psychology'
		]);
		DB::table('departments')->insert([
			'name' => 'Computer Science'
		]);
		DB::table('departments')->insert([
			'name' => 'Industrial Chemistry'
		]);
		DB::table('departments')->insert([
			'name' => 'Biotechnology'
		]);
		DB::table('departments')->insert([
			'name' => 'Biochemistry'
		]);
		DB::table('departments')->insert([
			'name' => 'Geology & Minning'
		]);
		DB::table('departments')->insert([
			'name' => 'Applied Science'
		]);
		DB::table('departments')->insert([
			'name' => 'Computing & IT'
		]);
		DB::table('departments')->insert([
			'name' => 'Biology Education'
		]);
		DB::table('departments')->insert([
			'name' => 'Business Education'
		]);
		DB::table('departments')->insert([
			'name' => 'Chemistry Education'
		]);
		DB::table('departments')->insert([
			'name' => 'Computer Science Education'
		]);
		DB::table('departments')->insert([
			'name' => 'Economics Education'
		]);
		DB::table('departments')->insert([
			'name' => 'English & Literary Studies Education'
		]);
		DB::table('departments')->insert([
			'name' => 'Accounting Education'
		]);
		DB::table('departments')->insert([
			'name' => 'Music'
		]);
		DB::table('departments')->insert([
			'name' => 'History, International Studies & Diplomacy'
		]);
		DB::table('departments')->insert([
			'name' => 'English & Literary Studies'
		]);
    }
}
