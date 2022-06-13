<?php

namespace App\Http\Livewire;

use App\Models\Tickests;
use Carbon\Carbon;
use Livewire\Component;

class DetailTickets extends Component
{
    public $listado;
    public $idTickets;
    public function mount($idTickets)
    {
        // dd($idTickets);
        $this->idTickets = intval($idTickets);
        $Tickests= Tickests::find($this->idTickets);
       
        if($Tickests){
            
            if($Tickests->status_id ==2){
                $Tickests->tiempoEspera = 0;
                $Tickests->tiempoestimado = '00:00:00';
            }
            else
            {
                $tiempoEspera=  Tickests::whereIn('Status_id',[1,2])->get();
                $Tickests->tiempoEspera = $tiempoEspera->sum('Duracion');
                $Tickests->tiempoestimado = $this->tiempo($tiempoEspera->sum('Duracion'))['tiempoestimado'];
            }

            $this->listado = $Tickests;

        }
        
       
        
    }

    private function tiempo($duracion)
    {
        $carbon = Carbon::now()->setTimezone('America/La_Paz');
        $tiempoestimado = $carbon->addMinute($duracion)->format('h:i:s');
        $timestamp=$carbon->timestamp;
        return ['tiempoestimado'=>$tiempoestimado,'timestamp'=>$timestamp];
    }

    public function render()
    {
        return view('livewire.detail-tickets');
    }
}
