<?php

use Illuminate\Database\Seeder;

class AdsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('ads')->insert(array (
            0 => 
            array (
            	'ads' => 'A',
            ),
			array (
            	'ads' => 'B',
            ),
			array (
            	'ads' => 'C',
            ),
			array (
            	'ads' => 'D',
            ),
			array (
            	'ads' => 'E',
            ),
			array (
            	'ads' => 'F',
            ),
			array (
            	'ads' => 'G',
            ),
			array (
            	'ads' => 'H',
            ),
			array (
            	'ads' => 'I',
            ),
        ));
    }
}
