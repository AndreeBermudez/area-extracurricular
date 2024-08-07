<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        header('Location: interfaz-login.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Area Extracurricular</title>
</head>

<body>
    <header>
        <?php include 'header-principal.php'; ?>
    </header>

    <section class="conocenos">
        <figure class="conocenos__imagen">
          <img src="./recursos/img-presentacion/imagen_conocenos.webp" alt="imagen" />
        </figure>
        <div class="conocenos__contenedor">
          <article class="conocenos__texto">
            <div class="conocenos__titulo">
              <h2>Conócenos</h2>
            </div>
            <div class="conocenos__descripcion">
              <p>
                En UTP buscamos que nuestros alumnos puedan complementar su
                formación académica, a través de nuestros talleres y actividades
                que permitirán explorar y desarrollar sus habilidades tanto
                deportivas como culturales.
              </p>
            </div>
            <div class="conocenos__responsive">
              <img src="./recursos/img-presentacion/imagen_conocenos.webp" alt="imagen">
            </div>
          </article>
          <article class="conocenos_myv">
            <div class="mision">
              <div class="conocenos__titulo" style="background-color: black;">
                <h2>Misión</h2>
              </div>
              <div class="conocenos__descripcion">
                <p>
                  Facilitar el desarrollo integral de los estudiantes de la UTP
                  mediante talleres y actividades deportivas y culturales que
                  complementen su formación académica.
                </p>
              </div>
              <figure class="svg-myv">
                <img src="./recursos/img-presentacion/mision.svg" alt="Misionlogo">
              </figure>
            </div>
            <div class="vision">
              <div class="conocenos__titulo"  style="background-color: black;">
                <h2>Visión</h2>
              </div>
              <div class="conocenos__descripcion">
                <p>
                  Ser un referente nacional en la promoción del desarrollo
                  integral estudiantil, reconocidos por la calidad y diversidad de
                  nuestras actividades.
                </p>
              </div>
              <figure class="svg-myv">
                <img src="./recursos/img-presentacion/vision.svg" alt="Visionlogo">
              </figure>
            </div>
          </article>
        </div>
    </section>

    <section class="FAQ">
        <div class="FAQ-header">
            <h1 class="FAQ-titulo">FAQ</h1>
            <p class="FAQ-desc">Preguntas Frecuentes</p>
            <!-- Buscador -->
            <div class="search">
                <input type="text" placeholder="Buscar...">
                <button>Buscar</button>
            </div>
        </div>

        <div class="FAQ-acordeon">
            <div class="FAQ-name">
                <h1>¿Tienes alguna duda?</h1>
                <img src="./recursos/img-nav/faq.webp" alt="FAQ">
            </div>
            <div class="FAQ-box">
                <div class="FAQ-wrapper">
                    <input type="checkbox" class="FAQ-trigger" id="FAQ-trigger-1">
                    <label class="FAQ-title" for="FAQ-trigger-1">¿Qué es el área extracurricular?</label>
                    <div class="FAQ-detail">
                        <p>Es un espacio donde los alumnos pueden desarrollar habilidades deportivas y culturales, 
                            complementando su formación académica.</p>
                    </div>
                </div>

                <div class="FAQ-wrapper">
                    <input type="checkbox" class="FAQ-trigger" id="FAQ-trigger-2">
                    <label class="FAQ-title" for="FAQ-trigger-2">¿Cuáles son los beneficios de participar en los talleres?</label>
                    <div class="FAQ-detail">
                        <p>Los alumnos podrán desarrollar habilidades deportivas y culturales, fomentar el trabajo en 
                            equipo y mejorar su rendimiento académico.</p>
                    </div>
                </div>

                <div class="FAQ-wrapper">
                    <input type="checkbox" class="FAQ-trigger" id="FAQ-trigger-3">
                    <label class="FAQ-title" for="FAQ-trigger-3">¿Cómo puedo inscribirme en los talleres?</label>
                    <div class="FAQ-detail">
                        <p>Para inscribirte en los talleres, debes llenar el formulario de inscripción y acercarte a la 
                            oficina extracurricular para completar el proceso.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="vida-utp">
        <div class="vida-utp__titulo">
          <h2>VIDA UTP</h2>
        </div>
        <div class="vida-utp__container">
          <div class="vida-utp-card">
            <div class="vida-utp__c1 cont-principal">
              <div class="vida-utp__box">
                <p>Conoce los clubes más destacados en utp</p>
              </div>
            </div>
            <div class="vida-utp__c2 cont-principal">
              <p>
                En la Universidad Tecnológica de Perú, destacamos a los
                deportistas más sobresalientes en cada taller deportivo,
                reconociendo su dedicación y logros. Estos estudiantes ejemplares
                no solo muestran habilidades excepcionales, sino también espíritu
                deportivo y compromiso con la excelencia.
              </p>
            </div>
          </div>
          <div class="vida-utp-card">
            <div class="vida-utp__c3 cont-principal">
              <p>
                Inscríbete a los talleres deportivos de la UTP y destaca como
                deportista mientras desarrollas tus habilidades y fomentas el
                trabajo en equipo. ¡Únete a nosotros y lleva tu rendimiento al
                siguiente nivel!.
              </p>
              <a href="interfaz-formulario.php">Inscribete</a>
            </div>
            <div class="vida-utp__c4 cont-principal">
              <div class="vida-utp__box">
                <p>Inscribete y vive la experiencia de la vida universitaria</p>
              </div>
            </div>
          </div>
        </div>
    </section>

    <section class="noticias">
        <div class="noticias-header">
          <h2>Acontecimientos Importantes</h2>
        </div>
  
        <div class="noticias-container">
          <div class="noticias-box">
            <div class="noticias-img">
              <img src="./recursos/img-noticias/noticia-1.webp" alt="autos" />
            </div>
            <div class="noticias-texto">
              <span>Jueves 15 de Diciembre 2022</span>
              <a href="https://www.utp.edu.pe/noticias/investigacion/docente-de-la-utp-obtuvo-el-primer-puesto-en-el-concurso-nacional-de-invenciones-2022" class="n-titulo" target="_blank">Profesor de Ing. Eléctrica de la UTP ganó primer puesto en Concurso Invenciones de Indecopi</a>
              <p>El primer lugar de este concurso lo obtuvo Francisco Javier Alcántara Benjumea, docente de la Universidad Tecnológica del Perú (UTP), quien fue ganador del Premio General por el invento denominado “Analizador de redes eléctricas basado en la red Adaline sobre hardware de 8 bits y reducidas memorias RAM y EEPROM”, el que fue realizado en el marco de un proyecto de investigación financiado por la UTP.</p>
              <a href="https://www.utp.edu.pe/noticias/investigacion/docente-de-la-utp-obtuvo-el-primer-puesto-en-el-concurso-nacional-de-invenciones-2022" target="_blank">Leer más</a>
            </div>
          </div>
  
          <div class="noticias-box">
            <div class="noticias-img">
              <img src="./recursos/img-noticias/noticia-2.webp" alt="autos" />
            </div>
            <div class="noticias-texto">
              <span>Martes 07 de Junio 2022</span>
              <a href="https://www.utp.edu.pe/noticias/investigacion/egresados-y-docentes-utp-desarrollan-sistema-de-reconocimiento-de-placas-vehiculares" class="n-titulo" target="_blank">Egresados crean sistema de reconocimiento de placas vehiculares con redes neuronales</a>
              <p>Los egresados de Ingeniería Electrónica del Campus Lima Centro, Miluska Valdeos y Alfredo Vadillo, con la asesoría de los docentes Ricardo Arias y Marina Pérez, elaboraron un sistema de reconocimiento y lectura de placas usando redes neuronales.</p>
              <a href="https://www.utp.edu.pe/noticias/investigacion/egresados-y-docentes-utp-desarrollan-sistema-de-reconocimiento-de-placas-vehiculares" target="_blank">Leer más</a>
            </div>
          </div>
  
          <div class="noticias-box">
            <div class="noticias-img">
              <img src="./recursos/img-noticias/noticia-3.webp" alt="autos" />
            </div>
            <div class="noticias-texto">
              <span>Lunes 29 de Agosto 2022</span>
              <a href="https://www.utp.edu.pe/noticias/miguel-lopez-cuenta-su-experiencia-en-spark-ar-de-meta-platforms" class="n-titulo" target="_blank">Miguel López cuenta su experiencia en Spark AR de Meta Platforms</a>
              <p>Miguel recuerda que, desde los 16 años, quería aprender a programar. A través de la página oficial de Facebook buscó capacitarse. Así, ingresó a la plataforma Spark AR, donde, tras varios años de estudiar cursos virtuales, logró hacerse un camino en el mundo digital e incursionó en la creación de filtros para celulares.</p>
              <a href="https://www.utp.edu.pe/noticias/miguel-lopez-cuenta-su-experiencia-en-spark-ar-de-meta-platforms" target="_blank">Leer más</a>
            </div>
          </div>
        </div>
        
    </section>

    <footer class="footer-utp">
        <?php include 'footer.php'; ?>
    </footer>

    <script src="./js/script.js"></script>
</body>

</html>