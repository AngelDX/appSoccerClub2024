<x-modal.card title="Registro administrador" blur wire:model.defer="isOpen">
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <div class="col-span-3">
            <x-input wire:model="form.fullname" label="Nombre completo"/>
        </div>
    </div>
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-native-select label="Cargo" placeholder="Seleccione una opción"
            :options="['PRESIDENTE','SECRETARIO','TESORERO','VOCAL']"
            wire:model="form.position"
        />
    </div>
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <div class="col-span-3">
            <x-input wire:model="form.dni" label="DNI"/>
        </div>
    </div>
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input type="date" wire:model="form.birthdate" label="Fecha de nacimiento"/>
    </div>
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input wire:model="form.email" label="E-mail"/>
    </div>
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input wire:model="form.cellphone" label="Número de celular"/>
    </div>
    <div class="grid sm:grid-cols-8 gap-2">
        <x-native-select label="Selecciona una temporada" wire:model="form.season_id">
            <option>Seleccione opción</option>
            @foreach ($seasons as $season)
            <option value="{{$season->id}}">{{$season->name}}</option>
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

