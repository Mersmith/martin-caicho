@section('tituloPagina', 'Crear post')

<div>
    <!-- CABECERA -->
    <div class="g_panel cabecera_titulo_pagina">
        <h2>Crear post</h2>
    </div>

    <!-- FORMULARIO -->
    <div class="formulario">
        <div class="g_fila">
            <div class="g_columna_8">
                <div class="g_panel">


                    <div class="g_panel">
                        <!-- Content -->
                        <div wire:ignore style="g_ckeditor">
                            <label for="content">Contenido</label>
                            <textarea id="content" class="w-full form-control" rows="6" wire:ignore x-data x-init="ClassicEditor.create($refs.miEditor, {
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
                                    @this.set('content', editor.getData())
                                });
                            })
                            .catch(error => {
                                console.error(error);
                            });" x-ref="miEditor">{!! $content !!}</textarea>

                            @error('content')
                            <p class="mensaje_error">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- BOTONES -->
        <div class="formulario_botones">
            <button wire:click="crearPost" class="guardar" wire:loading.attr="disabled">Guardar</button>
        </div>

    </div>