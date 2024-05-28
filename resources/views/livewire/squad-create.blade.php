<x-modal.card title="Registro Integrante" blur wire:model.defer="isOpen">
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <div class="col-span-3">
            <x-input wire:model="form.fullname" label="Nombre completo"/>
        </div>
    </div>
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input type="date" wire:model="form.birthdate" label="Fecha de nacimiento"/>
    </div>
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input wire:model="form.number" label="Número"/>
    </div>
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-native-select label="Cargo" placeholder="Seleccione una opción"
            :options="['Jugador','Comando técnico','Staff']"
            wire:model="form.type"
        />
    </div>
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-native-select label="Selecciona una cargo" wire:model.live="form.position_id">
            <option>Seleccione opción</option>
            @foreach ($cargos as $cargo)
            <option value="{{$cargo->id}}">{{$cargo->name}}</option>
            @endforeach
        </x-native-select>
    </div>
    <x-slot name="footer">
        <div class="flex justify-end gap-x-2">
            <x-button flat label="Cancelar" x-on:click="close()" />
            <x-button primary label="Registrar" wire:click="store()" />
        </div>
    </x-slot>
</x-modal.card>
