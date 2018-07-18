<?php

use Illuminate\Database\Seeder;
use App\Numpages;
class NumberpagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i = 1; $i <= 200; $i++) {
            $word = 275 * $i;
            Numpages::create([
                'name' => $i.'page(s)/'.$word.' words', 
            ]);
        }
    }
}
