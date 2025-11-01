@section('tituloPagina', 'Imágenes')
@section('anchoPantalla', '100%')

<div>
    <livewire:admin.imagen.imagen-formulario-livewire />

    <livewire:admin.imagen.imagen-lista-livewire />

    @if ($imagenSeleccionadaId)
        <livewire:admin.imagen.imagen-editar-livewire
            :imagenId="$imagenSeleccionadaId"
            wire:key="editar-{{ $imagenSeleccionadaId }}" />
    @endif
</div>
