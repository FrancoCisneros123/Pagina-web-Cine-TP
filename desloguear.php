<?php
session_start();
session_destroy();
header("location: index.php"); // Redirigir a la página de inicio u otra página después de destruir la sesión
?>