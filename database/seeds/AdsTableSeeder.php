<?php

use Illuminate\Database\Seeder;

class AdsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
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