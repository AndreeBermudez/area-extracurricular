function validarFormulario() {
    return validarPaso1() && validarPaso2();
}

function validarPaso1() {
    let codigo = document.getElementById('Codigo').value;
    let isValid = true;
    let codigoRegex = /^U.{8}$/i;

    if (!codigoRegex.test(codigo)) {
        document.querySelector('.error-codigo').innerText = "Código inválido. Debe comenzar con 'U' y tener 9 caracteres.";
        document.querySelector('.error-codigo').style.display = 'block';
        isValid = false;
    } else {
        document.querySelector('.error-codigo').style.display = 'none';
    }
    return isValid;
}

function validarPaso2() {
    let nombre = document.getElementById('nombre').value;
    let apellido = document.getElementById('apellido').value;
    let numero = document.getElementById('numero').value;

    let nombreApellidoRegex = /^[a-zA-Z ]+$/;
    let numeroRegex = /^\d{9}$/;
    let isValid = true;

    if (!nombreApellidoRegex.test(nombre)) {
        document.querySelector('.error-nombre').innerText = "Solo se permiten letras en el nombre.";
        document.querySelector('.error-nombre').style.display = 'block';
        isValid = false;
    } else {
        document.querySelector('.error-nombre').style.display = 'none';
    }

    if (!nombreApellidoRegex.test(apellido)) {
        document.querySelector('.error-apellido').innerText = "Solo se permiten letras en el apellido.";
        document.querySelector('.error-apellido').style.display = 'block';
        isValid = false;
    } else {
        document.querySelector('.error-apellido').style.display = 'none';
    }

    if (!numeroRegex.test(numero)) {
        document.querySelector('.error-numero').innerText = "Número inválido. Debe tener exactamente 9 dígitos.";
        document.querySelector('.error-numero').style.display = 'block';
        isValid = false;
    } else {
        document.querySelector('.error-numero').style.display = 'none';
    }

    return isValid;
}

function mostrarPaso(paso) {
    var steps = document.querySelectorAll('.form-step');
    steps.forEach(function(step, index) {
        step.style.display = (index === paso - 1) ? 'block' : 'none';
    });
}