<!-- Inicio Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<!-- Fin Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet"> <!--Fontawesome-->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>

@section('title', 'Gestion Docente')

@section('css')
@vite('resources/css/editarCurso.css')
@endsection


<!--contendor principal-->
<div class="container">
    <!--boton de regreso-->
    <div class="row w-100">
        <div class="col-12 d-flex justify-content-start align-items-start">
            X
        </div>
    </div>

    <!--contenedor de Titulo y subir foto-->
    <div class="row mt-5">
        <div class="col-6">
            <label for="inputT" class="estiloTitulo" style="width: 100% !important">Titulo de la noticia:</label>
            <input type="text" class="form-control input-titulo-editar" id="inputT"/>
        </div>

        <div class="col-3">
            <button class="w-100">
                <p>subir una foto</p>
            </button>
        </div>

        <div class="col-3">
            <input type="text" class="form-control inputTitulo" id="" style="width: 100%;" />
        </div>
    <!-- contenedor de fechas -->
    <div class="row mt-5">
            <div class="col-md-4">
                <label for="fechaInicio" class="TextosForm">Fecha de Inicio</label>
                <input type="date" class="form-control" id="fechaInicio">
            </div>
            <div class="col-md-4">
                <label for="fechaFin" class="TextosForm">Fecha de Finalización</label>
                <input type="date" class="form-control" id="fechaFin">
            </div>
            <div class="col-md-4">
                <label for="modalidad" class="TextosForm">Modalidad</label>
                <select class="form-select form-control" id="modalidad" aria-label="Default select example">
                    <option disabled selected>Seleccione la modalidad</option>
                </select>
            </div>
            
    </div>

    <!-- contenedor de Tutor y categoria -->
    <div class="row mt-5">

        <div class="col-md-6">
            <label for="tutor" class="TextosFormdos">Tutor</label>
            <select class="form-select form-control" id="tutores" aria-label="Default select example">
                <option disabled selected>Seleccione un tutor</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="categoria" class="TextosFormdos">Categoría</label>
            <select class="form-select form-control" id="categoria" aria-label="Default select example">
                <option disabled selected>Seleccione una categoría</option>
            </select>
        </div>

    </div>

<!-- contenedor de horarios y cupos -->
    <div class="row mt-5">
        <div class="col-md-6">
            <label for="horarios" class="TextosFormtres">Horarios</label>
            <input type="text" class="form-control" id="horarios" placeholder="">
        </div>
        <div class="col-md-6">
            <label for="cupos" class="TextosFormCupos">Cupos Disponibles</label>
            <input type="number" class="form-control" id="cupos" min="1">
        </div>
    </div>

<!-- contenedor de Descripcion -->
    <div class="row mt-5">
        <div class="col-md-12">
            <label for="descripcion" class="TextosFormDescripcion">Descripción del Curso</label>
            <textarea class="form-control" id="descripcionC" rows="4" placeholder=""></textarea>
        </div>
    </div>
<!-- seccion 2 del forumalario para los contenidos-->
    <div class="row mt-5">
        <div class="col-md-8">
            <label for="contenidoTituloCrear" class="ajusteContenido">Contenido</label>
        </div>
        <div class="col-md-4">
            <button type="button" class="btn btn-primary ajusteBoton" data-bs-toggle="modal" data-bs-target="#mCrearContenidoCurso">
                Agregar Contenido</button>
        </div>
    </div>

<!-- seccion de acordeon de los contenidos-->
<div class="row mt-5">
<div class="col-md-12">
    <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    <label for="descripcionAcordion">Introducción</label>
                </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">¡bienvenidos al primer curso de la asignatura! Lorem ipsum, dolor sit ame
                    consectetur adipisicing elit. Hic ad minus repudiandae quidem cum neque similique ex possimus corrupti laudantium iure adipisci quis,
                    eveniet dicta obcaecati praesentium nostrum. Sed, itaque.</div>
            </div>
        </div>
    </div>
</div>
</div>
 
    <div class="row mt-5">
        <div class="col-md-6 contBtnCurso">
            <button id="btnCrearCurso" type="submit" class="btn btn-primary btnCrearCursos">Cancelar</button>
        </div>
        <div class="col-md-6 contBtnCurso">
            <button id="btnCrearCurso" type="submit" class="btn btn-primary btnCrearCursos">Guardar Cambios</button>
        </div>
    </div>
</form>

</div>


<!-- Modal para crear un curso -->
<div class="modal fade modal-move-in-right" id="mCrearContenidoCurso" tabindex="-1" role="dialog">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">

<div class="modal-body">

    <form>
        <div class="row">
            <div class="col-md-12">
                <h5 class="Titulo-Modal" id="ContenidoModalText">Contenido</h5>
                <label for="titulo" class="TextosForm medFormModal">Título</label>
                <input type="text" class="form-control mx-auto" id="tituloModal" placeholder="">
            </div>
        </div>
        <div class="row">

            <div class="col-md-12">
                <label for="descripcion" class="TextosFormDescripcion alturaDescripc medFormModal">Descripción del Curso</label>
                <input class="form-control mx-auto" id="descripcionModal" rows="4" placeholder=""></input>
            </div>
        </div>

        <div class="modal-footer">
            <div class="grupBotones">
                <button type="button" class="btn btn-secondary button-common btn-Cancelar" data-bs-dismiss="modal" id="btn-Cancelar">Cancelar</button>
                <button type="button" class="btn btn-dark button-common btn-GuardaCambios" data-bs-dismiss="modal">Crear</button>
            </div>
        </div>
    </form>
</div>

</div>
</div>
</div>  
