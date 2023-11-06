@extends('Layouts.app')
@section('title', 'Gestion de admin')


@section('scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
@vite('resources/js/modulo-gestion-noticias/gestion-noticias.js');
@endsection

@section('css')
@vite('resources/css/styleUsuariosAdmin.css')
@vite('resources/css/index-usuarios.css')
@vite('resources/css/styleCursos.css')
@vite('resources/css/informacion.css')
@vite('resources/css/desactivarUsuario.css')
@endsection

@section('content')

<div class="contenedorPrincipal">
    <!-- área de titulo -->
    <div class="row align-items-center justify-content-center" style="width: 80%;">
        <div class="col-12">
            <label for="inputT" class="estiloTitulo" style="width: 100% !important">Titulo de la noticia:</label>
            <input type="text" class="form-control inputTitulo" id="inputT" style="width: 100%;" />
        </div>
    </div>

    <!-- área de archivo -->
    <div class="row align-items-center justify-content-center" style="width: 80%;">
        <button class="botonArchivo botonNoticia col-4" id="botonSubir">
            Subir imagen de portada
        </button>
        <input type="file" id="imageInput" accept="image/*" style="display: none;">
        <div class="col-8">
            <input type="text" class="form-control inputTitulo" id="inputT" style="width: 100%;" disabled />
        </div>

    </div>

    <!-- editor de texto BigBox -->
    <div class="box">
        <div class="form-group">
            <textarea id="contentDescripcion" name="content" class="form-control"></textarea>
        </div>
    </div>



    <!-- boton para crear noticia -->

    <div class="row align-items-center justify-content-center" style="width: 25%;">
        <div class="col-12">
            <button class="botonArchivo botonNoticia" id="btnCrearNoticias">
                <p>Crear noticia</p>
            </button>
        </div>

    </div>

</div>

@endsection