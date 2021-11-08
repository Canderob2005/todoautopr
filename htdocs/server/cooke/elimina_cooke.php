<?php

setcookie("user", time() - 3600, "/");

// header("Location: ../../anuncio.php");

echo $_COOKIE['user'];
