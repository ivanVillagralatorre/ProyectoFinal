$(document).ready(function () {
});
function desbloquear() {
    $("#ipNombre").prop('readonly', false);
    $("#ipApellidos").prop('readonly', false);
    $("#ipEmail").prop('readonly', false);
    $("#ipPass").prop('readonly', false);
    $("#btEditar").hide();
    $("#btCerrarSesion").hide();
    $("#btAplicar").show();
    $("#btCancelar").show();
}
function bloquear() {
    $("#ipNombre").prop('readonly', true);
    $("#ipApellidos").prop('readonly', true);
    $("#ipEmail").prop('readonly', true);
    $("#ipPass").prop('readonly', true);
    $("#btEditar").show();
    $("#btCerrarSesion").show();
    $("#btAplicar").hide();
    $("#btCancelar").hide();
}
