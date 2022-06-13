<?php

namespace App\Http\Livewire;

use App\Http\Controllers\TickestsController;
use App\Models\Tickests;
use Livewire\Component;

class Dashboard extends Component
{
    public $listados;

    public function mount(){

        $asig = new TickestsController();
        $asig->asignar(); 
        
        $tickests = Tickests::all()->map(function ($items) {
            if( $items->status_id==1){
                $items->relacion = 'Pendiente';
                $items->statusIco = 'fas fa-stopwatch text-red-500 mx-2';
            }elseif( $items->status_id==2){
                $items->relacion = 'Siendo Atendido';
                $items->statusIco = '<i class="fas fa-check text-green-500 mx-2"></i>';
            }else{
                $items->relacion = 'Cerrado';
                $items->statusIco = 'fas fa-check text-gray-500 mx-2';
            }

            if( $items->cola_id==1){
                $items->cola = 'Cola 1';
            }elseif( $items->cola_id==2){
                $items->cola = 'Cola 2';
            }
            
            return $items;
        });
        // dd($tickests);
        $this->listados = $tickests;
    }
    
    public function render()
    {
        return view('livewire.dashboard');
    }
}
