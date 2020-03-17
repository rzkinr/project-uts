<?php

use Illuminate\Database\Seeder;
use App\customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 3; $i++) { 
            customer::create([
                'first_name' => 'andi '.$i,
                'last_name' => 'andi '.$i,
                'address' => 'neraka '.$i,
                'profil' => 'foto '.$i,
                'email' => 'noreplay@com.com '.$i,
                'username' => 'projectdosa '.$i,
                'password' => \Hash::make('projectdosa')
            ]);
        }
        
    }
}
