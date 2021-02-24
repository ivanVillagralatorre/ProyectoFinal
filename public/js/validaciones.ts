$(document).ready(function (){
    $('#alert').hide();
})

function validarLogin():boolean{
    let password : string | number | string[] = $('#inputPassword').val();
    let pattern : RegExp = new RegExp('^(?=\\w*\\d)(?=\\w*[A-Z])(?=\\w*[a-z])\\S{8,16}$');

    if (pattern.test(<string>password)){

        return true
    }else {

        $('#alert').css('display','inline-block');
        $('#inputPassword').val('');
        $('#inputPassword').css('border','1px solid red');
        return false
    }

}
