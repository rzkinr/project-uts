<?php

use Illuminate\Database\Seeder;
use App\product;
class productseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 3; $i++) { 
           product::create([
               'merk_sepatu'=>'vans '.$i,
               'jenis_sepatu'=>'flatshoes '.$i,
               'no_sepatu'=>'4'.$i,
               'foto_sepatu'=>'foto '.$i,
               'stok_sepatu'=>'100'.$i,
               'status'=>'vans '.$i,
           ]);
        }
    }
}
