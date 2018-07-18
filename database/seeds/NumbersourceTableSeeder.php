<?php

use Illuminate\Database\Seeder;
use App\Numresource;
class NumbersourceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Numresource::truncate();

        

        // And now, let's create a few articles in our database:
        for ($i = 1; $i <= 80; $i++) {
            Numresource::create([
                'name' => $i,
                
            ]);
        }
    }
}
