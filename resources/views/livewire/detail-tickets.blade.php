<div>
    @if($listado)
    <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
    ¡Hola! {{$listado->name}} su Tickets de Atencion es: {{$listado->id}}  y se en cuentra en la cola {{$listado->cola_id}}
    Detalles de Tickets 
    </div>
    <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
    <b>Detalles de Tickets:</b> 
    </div>
    <div class="p-3">
    <table class="table-fixed">
        <thead>
        <tr>
            <th class="border-b  text-black w-1/3 px-4 py-2">Numero Tickests</th>
            <th class="border-b  text-black w-1/4 px-4 py-2">Tiempo en Espera </th>
            <th class="border-b  text-black w-1/4 px-4 py-2">Hora estimada </th>
            <th class="border-b  text-black w-1/4 px-4 py-2">Estatus</th>
        </tr>
        </thead>
        <tbody>

        <tr>
            <td class="border-b  text-black px-4 py-4">{{$listado->id}}</td>
            <td class="border-b  text-black px-4 py-4">{{$listado->tiempoEspera}} <b>Minutos</b></td>
            <td class="border-b  text-black px-4 py-4">{{$listado->tiempoestimado}}</td>
            <td class="border-b  text-black px-4 py-4">
            @if($listado->status_id==1 )
            Pendiente
            @elseif($listado->status_id==2)
            Siendo Atendido
            @else 
            Cerrado
            @endif

        </tr>

        </tbody>
    </table>
    </div>
@endif
</div>
