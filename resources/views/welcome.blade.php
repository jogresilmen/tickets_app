<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>
         
        <x-jet-validation-errors class="mb-4" />
        <br>
          @livewire('form-tickets',['idTickets'=> $id+1]) 
            <br>
        @if($t)
        @livewire('detail-tickets', ['idTickets'=> $id])
         @endif
    </x-jet-authentication-card>
</x-guest-layout>
