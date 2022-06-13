<?php

namespace App\View\Components;

use App\Models\Tickests;
use Illuminate\View\Component;

class formClient extends Component
{
    public $idTickets;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->idTickets= (Tickests::all()->last()->id?? 0)+1;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form-client');
    }
}
