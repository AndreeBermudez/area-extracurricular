function nextStep(step) {
  var currentStep = document.getElementById("step" + step);
  var nextStep = document.getElementById("step" + (step + 1));

  var inputs = currentStep.querySelectorAll("input, select");
  var isValid = true;

  if (step === 1) {
      var codigo = document.getElementById('Codigo').value;
      var regexCodigo = /^U.{8}$/;
      if (!regexCodigo.test(codigo)) {
          document.getElementById('errorCodigo').textContent = "Código inválido. Debe comenzar con 'U' y tener 9 caracteres.";
          document.getElementById('errorCodigo').style.display = "block";
          isValid = false;
      } else {
          document.getElementById('errorCodigo').textContent = "";
          document.getElementById('errorCodigo').style.display = "none";
      }
  } else if (step === 2) {
      isValid = validarDatosPersonales();
  }

  if (isValid) {
      currentStep.style.display = "none";
      nextStep.style.display = "block";
  }
}


function previousStep(step) {
  var currentStep = document.getElementById("step" + step);
  var previousStep = document.getElementById("step" + (step - 1));

  currentStep.style.display = "none";
  previousStep.style.display = "block";
}


function validarDatosPersonales() {
  var nombre = document.getElementById('nombre').value;
  var apellido = document.getElementById('apellido').value;
  var numero = document.getElementById('numero').value;
  var regexNombre = /^[a-zA-Z]+$/;
  var regexApellido = /^[a-zA-Z]+$/;
  var regexNumero = /^\d{9}$/;

  var isValid = true;

  if (!regexNombre.test(nombre)) {
      document.getElementById('errorNombre').textContent = "Solo se permiten letras.";
      document.getElementById('errorNombre').style.display = "block";
      isValid = false;
  } else {
      document.getElementById('errorNombre').textContent = "";
      document.getElementById('errorNombre').style.display = "none";
  }

  if (!regexApellido.test(apellido)) {
      document.getElementById('errorApellido').textContent = "Solo se permiten letras.";
      document.getElementById('errorApellido').style.display = "block";
      isValid = false;
  } else {
      document.getElementById('errorApellido').textContent = "";
      document.getElementById('errorApellido').style.display = "none";
  }

  if (!regexNumero.test(numero)) {
      document.getElementById('errorNumero').textContent = "Número inválido. Debe tener exactamente 9 dígitos.";
      document.getElementById('errorNumero').style.display = "block";
      isValid = false;
  } else {
      document.getElementById('errorNumero').textContent = "";
      document.getElementById('errorNumero').style.display = "none";
  }

  return isValid;
}

function validarFormulario() {
  var isValid = validarDatosPersonales();

  if (isValid) {
      mostrarResumen();
      document.getElementById("enviado-msg").style.display = "block";
  }

  return isValid;
}

function mostrarResumen() {
  var codigo = document.getElementById('Codigo').value;
  var nombre = document.getElementById('nombre').value;
  var apellido = document.getElementById('apellido').value;
  var taller = document.getElementById('taller').value;
  var numero = document.getElementById('numero').value;
  var correo = codigo + "@utp.edu.pe";

  document.getElementById('resumenCodigo').textContent = codigo;
  document.getElementById('resumenNombre').textContent = nombre + " " + apellido;
  document.getElementById('resumenCorreo').textContent = correo;
  document.getElementById('resumenNumero').textContent = numero;
  document.getElementById('resumenTaller').textContent = taller === "taller1" ? "Cultural" : "Deportivo";

  document.getElementById('form').style.display = "none";
  document.getElementById('resumen').style.display = "block";
}

document.getElementById('form').onsubmit = function(event) {
  event.preventDefault();
  if (validarFormulario()) {
      document.getElementById("enviado-msg").style.display = "block";
  }
};

document.querySelectorAll('.button-container button').forEach(function(button) {
  button.addEventListener('click', function() {
      var currentStep = this.closest('.form-step');
      var step = parseInt(currentStep.dataset.step);

      if (this.textContent === "Regresar") {
          previousStep(step);
      } else {
          nextStep(step);
      }
  });
});
