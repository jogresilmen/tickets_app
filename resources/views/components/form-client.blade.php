
<form id='formulario' action="/register-tickets"   class="w-full">
@csrf   
    <div class="md:flex md:items-center mb-6">
        <div class="md:w-1/4">
            <label class="block text-gray-500 font-regular md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                #
            </label>
        </div>
        <div class="md:w-3/4">
            <input disabled 
            class="bg-grey-200 appearance-none border-1 border-grey-200 rounded w-full py-2 px-4 text-grey-darker leading-tight focus:outline-none focus:bg-white focus:border-purple-light" 
            name="numero" 
            type="text" value="{{$idTickets}}">
        </div>
    </div>
    <div class="md:flex md:items-center mb-6">
        <div class="md:w-1/4">
            <label class="block text-grey font-regular md:text-right mb-1 md:mb-0 pr-4" for="inline-username">
                Nombre:
            </label>
        </div>
        <div class="md:w-3/4">
            <input 
            name="name"
            class="bg-grey-200 appearance-none border-1 border-grey-200 rounded w-full py-2 px-4 text-grey-darker leading-tight focus:outline-none focus:bg-white focus:border-purple-light" 
            id="name" 
            type="text">
        </div>
    </div>

    <div class="md:flex md:items-center">
        <div class="md:w-1/3"></div>
        <div class="md:w-2/3">
            <button type="submit" class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
                Crear Tickets
            </button>
        </div>
    </div>
</form>