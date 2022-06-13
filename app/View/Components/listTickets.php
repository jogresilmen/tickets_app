<?php

namespace App\View\Components;

use App\Models\Tickests;
use Carbon\Carbon;
use Illuminate\View\Component;

class listTickets extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $listado;
    public $idTickets;
    public function __construct($idTickets)
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
                // dd($this->tiempo(2));
                $tiempoEspera=  Tickests::whereIn('Status_id',[1,2])->get();
                $Tickests->tiempoEspera = $tiempoEspera->sum('Duracion')+$this->idTickets;
                $Tickests->tiempoestimado = $this->tiempo($tiempoEspera->sum('Duracion'))['tiempoestimado'];
            }
            $this->listado = $Tickests;

        }
        
       
        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    private function tiempo($duracion)
    {
        $carbon = Carbon::now()->setTimezone('America/La_Paz');
        $tiempoestimado = $carbon->addMinute($duracion)->format('h:i:s');
        $timestamp=$carbon->timestamp;
        return ['tiempoestimado'=>$tiempoestimado,'timestamp'=>$timestamp];
    }

    public function render()
    {
        return view('components.list-tickets');
    }
}
