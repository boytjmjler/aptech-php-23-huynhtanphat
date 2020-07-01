<?php

use Illuminate\Database\Seeder;

class PersionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('persion')->insert([
            ['name' => 'nam',
            'age' => 10,
            'address' => "12 stress"],
            ['name' => 'nu',
            'age' => 20,
            'address' => "13 stress"]
        ]);
    }
}
