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
        <section class="navegacion">
            <div class="logo">
                <img src="img-nav/logo.webp" alt="Logo">
            </div>

            <div class="hamburger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>

            <nav class="nav-bar">
                <ul>
                    <li><a href="principal.php" class="active">Inicio</a></li>
                    <li><a href="formulario.php">Formulario</a></li>
                    <li><a href="index.php">Salir</a></li>
                </ul>
        </section>
        <section class="container-titulo">
            <h1 class="portada-titulo">Area de Oficina Extracurricular</h1>
            <span class="fecha">Hoy es: <?php echo date("d/m/Y"); ?></span>        
          </section>
    </header>

    <section class="conocenos">
        <figure class="conocenos__imagen">
          <img src="img-presentacion/imagen_conocenos.webp" alt="imagen" />
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
              <img src="img-presentacion/imagen_conocenos.webp" alt="imagen">
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
                <img src="img-presentacion/mision.svg" alt="Misionlogo">
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
                <img src="img-presentacion/vision.svg" alt="Visionlogo">
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
                <img src="./img-nav/faq.webp" alt="FAQ">
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
              <a href="formulario.php">Inscribete</a>
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
              <img src="img-noticias/noticia-1.webp" alt="autos" />
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
              <img src="img-noticias/noticia-2.webp" alt="autos" />
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
              <img src="img-noticias/noticia-3.webp" alt="autos" />
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
        <div class="footer-seccion1">
            <div class="footer-ubicanos">
                <h2>
                    <img src="./iconos/bx-map.svg" alt="ubicanos-logo">
                    UBICANOS
                </h2>
                <p>
                    Campus Chimbote. Km 424 Panamericana Norte - Calle 56 S/N y al lado de Innova
                </p>
            </div>
            <div class="footer-email">
                <form class="footer-form" action="principal.php" method="post">
                    <p>Recibe las últimas noticias</p>
                    <input type="email" id="email" name="email" placeholder="Ingresa tu email aquí">
                    <button type="submit">Enviar</button>
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        if (!empty($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                            echo "<p>Gracias por suscribirte</p>";
                        }else{
                          echo "<p>Correo no válido</p>";
                        }
                    }
                    ?>
                </form>
            </div>
        </div>
        <div class="footer-seccion2">
            <div class="footer-iconos">
                <ul>
                    <li><a href="https://www.facebook.com/UTP.Peru" target="_blank"><img src="./iconos/facebook.svg" alt="icono-facebook"></a></li>
                    <li><a href="https://www.instagram.com/universidadutp/?hl=es" target="_blank"><img src="./iconos/instagram.svg" alt="icono-instagram"></a></li>
                    <li><a href="https://pe.linkedin.com/school/utp-universidad-tecnologica-del-peru/" target="_blank"><img src="./iconos/linkedin.svg" alt="icono-linkedin"></a></li>
                    <li><a href="https://www.youtube.com/channel/UCLQEBv7WN0SgOFD_nRLraRQ" target="_blank"><img src="./iconos/youtube.svg" alt="icono-youtube"></a></li>
                    <li><a href="https://github.com/AndreeBermudez" target="_blank"><img src="./iconos/github.svg" alt="icono-github"></a></li>
                </ul>
            </div>
            <div class="footer-copy">
                <p>© 2024 Universidad Tecnológica del Perú. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <script src="js/script.js"></script>
</body>

</html>