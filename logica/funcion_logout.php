<?php
session_start();
session_unset();
session_destroy();
header('Location: ../interfaz-login.php');
exit();
?>