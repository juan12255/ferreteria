@csrf
<div class="block">
    <x-jet-label for="nombre" value="{{ __('Nombre del Producto') }}" />
    <x-jet-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre', $producto->nombre)" required autofocus />
    <x-jet-label for="tproducto" value="{{ __('Tipo') }}" />
    <x-jet-input id="tproducto" class="block mt-1 w-full" type="text" name="tproducto" :value="old('tproducto', $producto->tproducto)" required autofocus />  
    <x-jet-label for="cantidad" value="{{ __('Cantidad') }}" />
    <x-jet-input id="cantidad" class="block mt-1 w-full" type="number" name="cantidad" :value="old('cantidad', $producto->cantidad)" required autofocus />   
</div>
<div class="flex justify-center">
    <div class="p-2">
        <div class="flex justify-end">
            <a href="{{ route('productos.create') }}">
                <x-jet-button type="submit">
                    Guardar
                </x-jet-button>
            </a>
        </div>
    </div>
</div>