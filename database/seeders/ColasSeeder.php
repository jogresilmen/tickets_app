<?php

namespace Database\Seeders;

use App\Models\Colas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ColasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $array= [ [
            'name'=>'cola 1', 'Duracion' => 2,'status'=>'1',
        ],
        [
            'name'=>'cola 2', 'Duracion' => 3,'status'=>'1',
        ],
       ];

       foreach($array as $r){
        $tipos = new Colas();
        $tipos->name = $r['name'];
        $tipos->Duracion=$r['Duracion'];
        $tipos->status=$r['status'];
        $tipos->save();

       }
    }
}
