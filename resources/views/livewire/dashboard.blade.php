<div>
    <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
                        <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
                            <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
                               Listados de tickets
                            </div>
                            <div class="p-3">
                                <table class="table-responsive w-full rounded">
                                    <thead>
                                      <tr>
                                        <th class="border w-1/4 px-4 py-2">Numero</th>
                                        <th class="border w-1/6 px-4 py-2">Nombre</th>
                                        <th class="border w-1/6 px-4 py-2">Cola</th>
                                        <th class="border w-1/6 px-4 py-2">Tiempo</th>
                                        <th class="border w-1/7 px-4 py-2">Status</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($listados as $listado)
                                        <tr>
                                            <td class="border px-4 py-2">{{$listado->id}}</td>
                                            <td class="border px-4 py-2"> {{$listado->name}}</td>
                                            <td class="border px-4 py-2">{{$listado->cola}}</td>
                                            <td class="border px-4 py-2">{{$listado->Duracion}} <b>Minutos</b></td>
                                            
                                            <td class="border px-4 py-2">
                                                <i class="{{$listado->statusIco}}"> {{$listado->relacion}}</i>
                                            </td>
                                            
                                        </tr>
                                       @empty
                                            <p>No Existen Tickets</p>
                                        @endforelse 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

    <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
                        <!--Horizontal form-->
                        <div class="mb-2 border-solid border-grey-light rounded border shadow-sm w-full md:w-1/2 lg:w-1/2">
                            <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
                                cola 1
                            </div>
                            <div class="p-3">
                                <table class="table-fixed">
                                    <thead>
                                      <tr>
                                        <th class="border w-1/2 px-4 py-2">numero </th>
                                        <th class="border w-1/4 px-4 py-2">Nombre del Autor</th>
                                        <th class="border w-1/4 px-4 py-2">status</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @forelse($listados as $cola)
                                       @if($cola->cola_id==1)
                                      <tr>
                                        <td class="border px- py-4">{{$cola->id}}</td>
                                        <td class="border px-4 py-2">{{$cola->name}}</td>
                                        <td class="border px-4 py-2">{{$cola->relacion}}</td>
                                      </tr>
                                      @endif
                                      @empty
                                            <p>No Existen Tickets</p>
                                        @endforelse 
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        
                        
                        <!--/Horizontal form-->

                        <!--Underline form-->
                        <div class="mb-2 md:mx-2 lg:mx-2 border-solid border-gray-200 rounded border shadow-sm w-full md:w-1/2 lg:w-1/2">
                            <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
                               cola 2
                            </div>
                            <div class="p-3">
                                <table class="table-fixed">
                                    <thead>
                                      <tr>
                                        <th class="border w-1/2 px-4 py-2">numero </th>
                                        <th class="border w-1/4 px-4 py-2">Nombre del Autor</th>
                                        <th class="border w-1/4 px-4 py-2">status</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @forelse($listados as $cola)
                                       @if($cola->cola_id==2)
                                      <tr>
                                        <td class="border px- py-4">{{$cola->id}}</td>
                                        <td class="border px-4 py-2">{{$cola->name}}</td>
                                        <td class="border px-4 py-2">{{$cola->relacion}}</td>
                                      </tr>
                                      @endif
                                      @empty
                                            <p>No Existen Tickets</p>
                                        @endforelse 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--/Underline form-->
                    </div>
</div>
