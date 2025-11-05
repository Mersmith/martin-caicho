@section('tituloPagina', 'Crear Página')

@section('anchoPantalla', '100%')

<div class="g_gap_pagina">
    <!-- CABECERA -->
    <div class="g_panel cabecera_titulo_pagina">
        <h2>Crear Página</h2>

        <!--BOTONES-->
        <div class="cabecera_titulo_botones">
            <a href="{{ route('admin.pagina.vista.todo') }}" class="g_boton g_boton_light">
                Inicio <i class="fa-solid fa-house"></i></a>

            <a href="{{ route('admin.pagina.vista.todo') }}" class="g_boton g_boton_darkt">
                <i class="fa-solid fa-arrow-left"></i> Regresar</a>
        </div>
    </div>

    <!-- FORMULARIO -->
    <form wire:submit.prevent="store" class="formulario">
        <div class="g_fila">
            <div class="g_columna_8 g_gap_pagina">
                <div class="g_panel">
                    <!--TITULO-->
                    <h4 class="g_panel_titulo">Contenido</h4>

                    <!-- contenido -->
                    <div wire:ignore style="g_ckeditor" class="g_margin_bottom_10">
                        <textarea id="contenido" class="w-full form-control" rows="6" wire:ignore x-data x-init="ClassicEditor.create($refs.miEditor, {
                                toolbar: [
                                    'undo', 'redo', '|',
                                    'heading', '|',
                                    'bold', 'italic', '|',
                                    'link', 'uploadImage', 'insertTable', 'blockQuote',
                                    'mediaEmbed', '|',
                                    'bulletedList', 'numberedList', '|',
                                    'outdent', 'indent'
                                ],
                                ckfinder: {
                                    uploadUrl: '{{ route('admin.imagen.upload-local') }}?_token={{ csrf_token() }}'
                                },
                                link: {
                                    addTargetToExternalLinks: true,
                                    defaultProtocol: 'https://'
                                }
                            })
                            .then(editor => {
                                editor.model.document.on('change:data', () => {
                                    @this.set('contenido', editor.getData())
                                });
                            })
                            .catch(error => {
                                console.error(error);
                            });" x-ref="miEditor">{!! $contenido !!}</textarea>

                        @error('contenido')
                        <p class="mensaje_error">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <!-- BOTONES -->
        <div class="g_margin_top_20">
            <div class="formulario_botones">
                <button type="submit" class="guardar" wire:loading.attr="disabled" wire:target="store">
                    <span wire:loading.remove wire:target="store">Crear</span>
                    <span wire:loading wire:target="store">Guardando...</span>
                </button>

                <a href="{{ route('admin.pagina.vista.todo') }}" class="cancelar">Cancelar</a>
            </div>
        </div>

</div>