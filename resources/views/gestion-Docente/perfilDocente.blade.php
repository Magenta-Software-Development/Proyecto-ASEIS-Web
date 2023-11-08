@extends('Layouts.appDocente')

@section('title', 'Perfil Docente')

@section('scripts')

@vite('resources/js/editPerfDoc.js')
@vite('resources/js/limitePalabras.js')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
@endsection

@section('css')
@vite('resources/css/perfilDocente.css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
@endsection

@section("content")

<div class="contenedor-tarjeta">

    <div class="tarjetaDatosDoc">
        <!-- Contenido de la tarjeta -->
        <div class="profile-image">
            <img src="https://via.placeholder.com/232x232" alt="Perfil Docente" class="foto-redonda" />
        </div>
        <div class="info-generalDocente">
            <h5 class="text-center mt-3 textTarjetaDoc" id="nombreDocente-Pefil"></h5>
            <p class="text-center text-contenido" id="docenteListado"></p>
            <p class="text-center text-contenido" id="especialidadDocente"></p>
            <p class="text-center text-contenido" id="correoDocenteLis"></p>
            <p class="text-center text-contenido" id="DescDocenteLis"></p>
        </div>
    </div>
    <div class="boton-editar">
        <button id="btn-editarPerfilDocente" data-toggle="modal" data-target="#modalEditarPerfil">
            <i class="fas fa-pencil-alt"></i>
            <p id="textBtnEditar">Editar Perfil</p>
        </button>
    </div>
</div>

<div class="modal fade modal-move-in-right" id="modalEditarPerfil" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">

                <div class="imagenModPerfil">
                    <label for="imageInput" class="image-label">
                        <img src="https://via.placeholder.com/232x232" alt="Perfil Docente" class="foto-redonda" id="temporaryImage" />

                        <div class="camera-icon">
                            <i class="fas fa-camera"></i>
                        </div>
                    </label>
                    <input type="file" id="imageInput" accept="image/*" style="display: none;">

                </div>
                <form>
                    <div class="form-group">
                        <div class="inputsArriba">
                            <input type="text" class="campos" id="campo1" placeholder="Nombre Completo">
                        </div>
                        <div class="inputsArriba">
                            <select id="especialidadDocenteSelector" class="form-select" aria-label="Default select example">
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="campos" id="campo3" placeholder="Descripción">
                        <div class="ContlimitePalabras">
                            Palabras: <span id="limitePalabras">0</span> / 30

                        </div>
                    </div>

                    <div class="grupoBotones">
                        <button type="button" class="btn btn-secondary button-common btn-Cancelar" data-dismiss="modal" id="btn-Cancelar">Cancelar</button>
                        <button type="button" class="btn btn-dark button-common btn-GuardCambios" data-dismiss="modal" id="btn-GuardarCambiosActulizados">Guardar Cambios</button>
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>

@endsection