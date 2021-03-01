let error:boolean= false;
let extensionesPermitidas:Array<string>=[
    "jpg","jpeg","png","gif","pdf","txt","odt","docx","zip"
];
$(document).ready(function (){
    $("#iconoArchivo").css("display","none");
    $('#archivo').change(function (){
        validar();
    });
    $('#formMultimedia').on('submit',function (e){
        //si ocurre algun error evitar el submit:
        if(error){
            e.preventDefault();
        }
    });
});
function validar(){
    let archivo :string = $('#archivo').val().toString();
    try{
        if (archivo== ""){
            $("#iconoArchivo").css("display","none");
            throw new Error();
        }
        let extension:string = archivo.substring(archivo.lastIndexOf('.'), archivo.length);
        extension = extension.substring(1,extension.length);
        if (extensionesPermitidas.includes(extension)){
            $("#iconoArchivo").addClass('fa-check-circle')
                .removeClass('fa-exclamation-triangle');
            $("#iconoArchivo").css("display","inline");
        }
        else{
            $("#iconoArchivo").addClass('fa fa-exclamation-triangle')
                .removeClass('fa fa-check-circle');
            $("#iconoArchivo").css("display","inline");
            throw new Error();
        }
        error=false;
    }
    catch (err){
        error=true;
    }
}

