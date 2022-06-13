<?php

namespace App\Http\Controllers;

use App\Models\Tickests;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTickestsRequest;
use App\Http\Requests\UpdateTickestsRequest;
use App\Models\Colas;
use Carbon\Carbon;
use phpDocumentor\Reflection\Types\This;
use SebastianBergmann\CodeCoverage\Report\Xml\Totals;

class TickestsController extends Controller
{
    
    public function index(Request $request){
        //dd($request->t);
        $tickets= (Tickests::all()->last());
        if($tickets){
        if($tickets->tickets==$request->t){
            return view('welcome')->with(['id' => $tickets->id,'t'=> 1 ]);
        }else{
            return view('welcome')->with(['id' => $tickets->id,'t'=> 0]);
        }
    }else{
        return view('welcome')->with(['id' => 0,'t'=> 0]);
    }
       
    }

    public function create(Request $request)
    {
        //    dd($this->asignar());
        date_default_timezone_set("America/Caracas");
        $date = Carbon::now();
        
        $asignar = $this->asignar();
        $cola =  Colas::find($asignar);
        $tiempoAdd =  $date->addMinute($cola->Duracion);
        $hash = sha1($tiempoAdd->timestamp);
        // dd($hash);
        $Tickests =  Tickests::create([
            
            'name' => $request->name,
            'cola_id' => $asignar,
            'Duracion' => $cola->Duracion,
            'tickets'=> $hash,
            'marca' => $tiempoAdd->timestamp,
            'status_id' => 1,

        ]);
       
// 
return redirect('/?t='.$hash)->with(['id' => $Tickests->id]);
        
    }

   

    public function asignar()
    {
        date_default_timezone_set("America/Caracas");
        $tiempo  = Carbon::now();
        $colas =  Colas::all();
        $tiempocolas = [];
        $response = 1;

        foreach ($colas as $cola) {
            $total = 0;
            $consultas = Tickests::all()->where('cola_id', $cola->id)->whereIn('status_id', [1, 2]);
            foreach ($consultas as $consulta) {
                if ($tiempo->timestamp>= $consulta->marca) {
                    $this->cerrarTickets($consulta->id);
                } else {
                    $total =  $total + $consulta->Duracion;
                }
            }
            $tiempocolas[$cola->id] = $total;
        }

        return array_search(min($tiempocolas), $tiempocolas);
    }

    public function cerrarTickets($id)
    {
        Tickests::find($id)->update(['status_id' => 3]);
        $this->asignar();
    }
}
