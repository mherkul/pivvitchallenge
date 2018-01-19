<?php

use Illuminate\Database\Seeder;
use App\Offering;

class OfferingsTableSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Offering::create([
        	'title' => 'Offering 1',
        	'price' => 500
        ]);
        Offering::create([
        	'title' => 'Offering 2',
        	'price' => 250
        ]);
    }
}
