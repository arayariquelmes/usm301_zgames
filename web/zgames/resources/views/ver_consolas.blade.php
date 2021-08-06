@extends("layouts.master")
@section("contenido")
    <div class="row mt-2">
        <div class="col-12 col-md-6 col-lg-5 mx-auto">
            <div class="card">
                <div class="card-header bg-warning text-white">
                    <span>Filtrar</span>
                </div>
                <div class="card-body">
                    <select class="form-select" id="filtro-cbx">
                        <option value="todos">Todos</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-12 col-md-12 col-lg-6 mx-auto">
            <table class="table table-hover table-bordered table-striped table-responsive">
                <thead class="bg-info">
                    <tr>
                        <td>Nombre</td>
                        <td>Marca</td>
                        <td>Año de Lanzamiento</td>
                        <td>Acciones</td>
                    </tr>
                </thead>
                <tbody id="tbody-consola">

                </tbody>
            </table>
        </div>
    </div>
    <div class="d-none">
        <div class="row mt-5 molde-actualizar">
                <div class="mb-3">
                    <label for="nombre-txt" class="form-label">Nombre</label>
                    <input type="text"  class="form-control nombre-txt">
                </div>
                <div class="mb-3">
                    <label for="marca-select" class="form-label">Marca</label>
                    <select class="form-select marca-select" >
                    </select>
                </div>
                <div class="mb-3">
                    <label for="anio-txt" class="form-label">Año de lanzamiento</label>
                    <input type="number" class="form-control anio-txt">
                </div>
                
                <div class="d-grid gap-1">
                    <button  class="btn btn-info actualizar-btn">Actualizar</button>
                </div>
            </div>

    </div>
@endsection

@section("javascript")
    <script src="{{asset('js/servicios/consolasService.js')}}"></script>
    <script src="{{asset('js/servicios/marcasService.js')}}"></script>
    <script src="{{asset('js/ver_consolas.js')}}"></script>
@endsection