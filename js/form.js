function mostrarPaso(paso) {
    document.querySelectorAll('.form-step').forEach(function(step) {
        step.style.display = 'none';
    });
    document.getElementById('step' + paso).style.display = 'block';
}
