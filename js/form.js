function siguientePaso(paso) {
    var pasoActual = document.getElementById("step" + paso);
    var proximoPaso = document.getElementById("step" + (paso + 1));

    var entradas = pasoActual.querySelectorAll("input, select");
    var esValido = true;

    entradas.forEach(function (entrada) {
      if (!entrada.checkValidity()) {
        esValido = false;
        entrada.reportValidity();
      }
    });

    if (esValido) {
      pasoActual.style.display = "none";
      proximoPaso.style.display = "block";
    }
  }

  function pasoAnterior(paso) {
    var pasoActual = document.getElementById("step" + paso);
    var pasoPrevio = document.getElementById("step" + (paso - 1));

    pasoActual.style.display = "none";
    pasoPrevio.style.display = "block";
  }

  function alEnviar() {
    var formulario = document.getElementById("form");
    formulario.classList.add("submitted");
    document.getElementById("enviado-msg").style.display = "block";
  }