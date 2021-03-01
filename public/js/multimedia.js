var error = false;
var extensionesPermitidas = [
    "jpg", "jpeg", "png", "gif", "pdf", "txt", "odt", "docx", "zip"
];
$(document).ready(function () {
    $("#iconoArchivo").css("display", "none");
    $('#archivo').change(function () {
        validar();
    });
    $('#formMultimedia').on('submit', function (e) {
        //si ocurre algun error evitar el submit:
        if (error) {
            e.preventDefault();
        }
    });
});
function validar() {
    var archivo = $('#archivo').val().toString();
    try {
        if (archivo == "") {
            $("#iconoArchivo").css("display", "none");
            throw new Error();
        }
        var extension = archivo.substring(archivo.lastIndexOf('.'), archivo.length);
        extension = extension.substring(1, extension.length);
        if (extensionesPermitidas.includes(extension)) {
            $("#iconoArchivo").addClass('fa-check-circle')
                .removeClass('fa-exclamation-triangle');
            $("#iconoArchivo").css("display", "inline");
        }
        else {
            $("#iconoArchivo").addClass('fa fa-exclamation-triangle')
                .removeClass('fa fa-check-circle');
            $("#iconoArchivo").css("display", "inline");
            throw new Error();
        }
        error = false;
    }
    catch (err) {
        error = true;
    }
}
