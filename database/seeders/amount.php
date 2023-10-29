<?php

namespace Database\Seeders;

use App\Models\amount as ModelsAmount;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class amount extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelsAmount::create([
 'A'=>'0',
 'B'=>'0',
 'O'=>'0',
 'AB'=>'0',
 'Aa'=>'0',
 'Bb'=>'0',
 'Oo'=>'0',
 'ABb'=>'0',
        ]);
    }
}
