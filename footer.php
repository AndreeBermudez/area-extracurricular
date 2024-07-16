<div class="footer-seccion1">
            <div class="footer-ubicanos">
                <h2>
                    <img src="./recursos/iconos/bx-map.svg" alt="ubicanos-logo">
                    UBICANOS
                </h2>
                <p>
                    Campus Chimbote. Km 424 Panamericana Norte - Calle 56 S/N y al lado de Innova
                </p>
            </div>
            <div class="footer-email">
                <form class="footer-form" action="" method="post">
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
                    <li><a href="https://www.facebook.com/UTP.Peru" target="_blank"><img src="./recursos/iconos/facebook.svg" alt="icono-facebook"></a></li>
                    <li><a href="https://www.instagram.com/universidadutp/?hl=es" target="_blank"><img src="./recursos/iconos/instagram.svg" alt="icono-instagram"></a></li>
                    <li><a href="https://pe.linkedin.com/school/utp-universidad-tecnologica-del-peru/" target="_blank"><img src="./recursos/iconos/linkedin.svg" alt="icono-linkedin"></a></li>
                    <li><a href="https://www.youtube.com/channel/UCLQEBv7WN0SgOFD_nRLraRQ" target="_blank"><img src="./recursos/iconos/youtube.svg" alt="icono-youtube"></a></li>
                    <li><a href="https://github.com/AndreeBermudez" target="_blank"><img src="./recursos/iconos/github.svg" alt="icono-github"></a></li>
                </ul>
            </div>
            <div class="footer-copy">
                <p>© 2024 Universidad Tecnológica del Perú. Todos los derechos reservados.</p>
            </div>
        </div>