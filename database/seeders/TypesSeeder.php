<?php

namespace Database\Seeders;

use App\Models\Types;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $array=[
            [
                'name'=>'Pendiente', 'category' =>'statusTickest'
            ],
            [
                'name'=>'Siendo Atendido', 'category' =>'statusTickest'
            ],
            [
                'name'=>'Cerrado', 'category' =>'statusTickest'
            ],
            
            
    
           ];
    
           foreach($array as $r){
            $tipos = new Types();
            $tipos->name = $r['name'];
            $tipos->category=$r['category'];
            $tipos->save();
    
           }
    }
}
