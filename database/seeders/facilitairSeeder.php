<?php

namespace Database\Seeders;

use App\Models\PinMeta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class facilitairSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        PinMeta::create([

        
           
            'school_name' => 'Curio',
            'school_location' => 'Breda',
            'datum_gebruikname' => '2023-10-13',
            'reden_bijzonderheid' => 'onbekend',
            'meningen' => 'test',
            'primair_doel' => 'onbekend',
            'bijzonderheden' => 'test',
            'betrokkenen' => 'docenten'

        ]);
    }
}
