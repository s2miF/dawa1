<?php

use Illuminate\Database\Seeder;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->delete();
        $sb = array(
            ['id' => 1, 'title' => 'CS107',  'description' => 'Computer Skills', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'title' => 'CS205',  'description' => 'Computer Science', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'title' => 'CS803',  'description' => 'Math', 'created_at' => new DateTime, 'updated_at' => new DateTime]
        );
        DB::table('subjects')->insert($sb);
    }
}
