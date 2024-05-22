document.getElementById('myRegister').addEventListener('submit', function(event) {
    event.preventDefault();

    var nombre = document.querySelector('input[name="nombre"]').value;
    var usuario = document.querySelector('input[name="usuario"]').value;
    var email = document.querySelector('input[name="email"]').value;
    var password = document.querySelector('input[name="password"]').value;
    var confirmar_password = document.querySelector('input[name="confirmar_password"]').value;

    var regexNombre = /^[a-zA-Z]+$/;
    var regexEmail = /^[\w-]+(\.[\w-]+)*@utp\.edu\.pe$/;

    if (!nombre || !usuario || !email || !password || !confirmar_password) {
        alert('Todos los campos son obligatorios');
        return;
    }

    if (!regexNombre.test(nombre)) {
        alert('El nombre no debe contener caracteres especiales');
        return;
    }

    if (!regexEmail.test(email)) {
        alert('El email debe terminar en @utp.edu.pe');
        return;
    }

    if (password !== confirmar_password) {
        alert('Las contraseñas no coinciden');
        return;
    }

    alert('Registro exitoso');
    window.location.href = 'index.html';
});