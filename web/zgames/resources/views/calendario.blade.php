@extends("layouts.master")
@section("contenido")
    <div id="calendario">

    </div>
@endsection
@section("javascript")
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.9.0/main.min.js" ></script>
    <script src="{{asset('js/utils/calendario.js')}}"></script>
@endsection