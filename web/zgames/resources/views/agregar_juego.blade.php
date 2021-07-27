@extends("layouts.master")
@section("contenido")
    <!-- Agregar formulario -->
    <div class="row">
        <div class="col-lg-5 col-md-6 col-sm-12 mx-auto mt-5">
            <div class="card">
                <div class="card-header bg-warning text-white">
                    <span>Registrar Juego</span>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="consola-select">Consola</label>
                        <select  id="consola-select" class="form-select"></select>
                    </div>
                    <div class="mb-3">
                        <label for="nombre-txt" class="form-label">Nombre</label>
                        <input type="text"  id="nombre-txt" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="descripcion-txt" class="form-label">Descripción</label>
                        <textarea  id="descripcion-txt" class="form-control">
                        </textarea>
                    </div>
                    <div class="mb-3">
                        <label for="fecha-txt" class="form-label">Fecha Lanzamiento</label>
                        <input type="date"  id="fecha-txt" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="precio-txt" class="form-label">Precio</label>
                        <input type="number"  id="precio-txt" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="apto-rb" class="form-label">Apto Niños?</label>
                        <div class="form-check">
                            <input type="radio" name="apto-rb" checked  id="apto-si-rb" class="form-check-input" value="si">
                            <label for="apto-si-rb" class="form-check-label">Sí</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="apto-rb"  id="apto-no-rb" class="form-check-input" value="no">
                            <label for="apto-no-rb" class="form-check-label">No</label>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-grid gap-1">
                    <button type="button" id="registrar-btn" class="btn btn-primary">Registrar</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section("javascript")
    <script src="{{asset('js/servicios/consolasService.js')}}"></script>
    <script src="{{asset('js/servicios/juegosService.js')}}"></script>
    <script src="{{asset('js/agregar_juego.js')}}"></script>
@endsection