$(document).ready(function () {
});
function validarLogin() {
    var password = $('#inputPassword').val();
    var pattern = new RegExp('^(?=\\w*\\d)(?=\\w*[A-Z])(?=\\w*[a-z])\\S{8,16}$');
    if (pattern.test(password)) {
        return true;
    }
    else {
        $('#alert').css('display', 'inline-block');
        $('#inputPassword').val('');
        $('#inputPassword').css('border', '1px solid red');
        return false;
    }
}
function validarComentario() {
    var text = $('#textarea').val();
    if (text == '') {
        return false;
    }
    else {
        return !((text === null || text === void 0 ? void 0 : text.length) == 0 || (text === null || text === void 0 ? void 0 : text.length) > 255);
    }
}
