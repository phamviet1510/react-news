<?php

use Illuminate\Database\Seeder;

class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('type')->delete();

        \DB::table('type')->insert(array (
            0 =>
                array (
                    'name' => 'Defense',
                ),
            1 =>
                array (
                    'name' => 'Movement',
                ),
            2 =>
                array (
                    'name' => 'Magic',
                ),
            3 =>
                array (
                    'name' => 'Jungle',
                ),
            4 =>
                array (
                    'name' => 'Attack',
                ),
            5 =>
                array (
                    'name' => 'Tank',
                ),
            6 =>
                array (
                    'name' => 'Fighter',
                ),
            7 =>
                array (
                    'name' => 'Assassin',
                ),
            8 =>
                array (
                    'name' => 'Mage',
                ),
            9 =>
                array (
                    'name' => 'Marksman',
                ),
            10 =>
                array (
                    'name' => 'Supports',
                ),
        ));
    }
}
