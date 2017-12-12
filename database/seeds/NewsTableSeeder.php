<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->delete();
        $ns = array(
            ['id' => 1, 'title' => 'xkflhg',  'content' => 'Computer Skills', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'title' => 'CS205',  'content' => 'Computer Science', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'title' => 'CS803',  'content' => 'Math', 'created_at' => new DateTime, 'updated_at' => new DateTime]
        );
        DB::table('news')->insert($ns);
    }
}
