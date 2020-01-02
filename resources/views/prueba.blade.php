@extends('layouts.plantilla')
@section('title',"Componente VUE")
@section('content')
<button type="button" class="btn btn-primary mostrar" onclick="mostrarToast()">Mostrar</button>

<div role="alert" id="mitoast" aria-live="assertive" aria-atomic="true" class="toast">
 
    <div class="toast-header">
        
        <!-- Nombre de la Aplicación -->
        <strong class="mr-auto">Prueba Toast</strong>
        
        <!-- Tiempo del Evento realizado -->
        <small>ahora</small>
        
        <!-- Botón para Cerrar el Toast -->
        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Cerrar" onclick="cerrarToast()">
            <span aria-hidden="true">×</span>
        </button>
 
    </div>
 
</div>

<script type="text/javascript">
// Con esta función se muestra el Toast 
function mostrarToast() {
    var toast = document.getElementById("mitoast");
    toast.className = "mostrar";
    setTimeout(function(){ toast.className = toast.className.replace("mostrar", ""); }, 5000);
}
function cerrarToast() {
    var toast = document.getElementById("mitoast");
    toast.className = "cerrar";
    toast.className = toast.className.replace("cerrar", "");
}
</script>
@endsection