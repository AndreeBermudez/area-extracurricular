document.getElementById('myForm').addEventListener('submit', function(event) {
    event.preventDefault();

    var usuario = document.getElementById('usuario').value;
    var password = document.getElementById('contrasenia').value;

    if(usuario == 'admin' && password == 'admin') {
        window.location.href = 'principal.html';
    }else{
        alert('Usuario o contraseña incorrectos');
    }


});