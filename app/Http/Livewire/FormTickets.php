<?php

namespace App\Http\Livewire;

use App\Models\Tickests;
use Livewire\Component;

class FormTickets extends Component
{
    public $idTickets;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function mount($idTickets)
    {
        $this->idTickets= $idTickets;
    }
   
    public function render()
    {
        return view('livewire.form-tickets');
    }
}
