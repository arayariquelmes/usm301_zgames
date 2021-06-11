@extends("layouts.master")

@section("contenido")
    
    <div class="row mt-5">
        <div class="col-12 col-md-6 col-lg-5 mx-auto">
            <div class="card">
                <div class="card-header bg-warning text-white">
                    <span>Agregar Consola</span>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="nombre-txt" class="form-label">Nombre</label>
                        <input type="text" id="nombre-txt" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="marca-select" class="form-label">Marca</label>
                        <select class="form-select" id="marca-select">
                            <option value="microsoft">Microsoft</option>
                            <option value="sony">Sony</option>
                            <option value="nintendo">Nintendo</option>
                            <option value="sega">Sega</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="anio-txt" class="form-label">Año de lanzamiento</label>
                        <input type="number" class="form-control" id="anio-txt">
                    </div>
                </div>
                <div class="card-footer d-grid gap-1">
                    <button class="btn btn-info">Registrar</button>
                </div>
            </div>
        </div>
    </div>

@endsection