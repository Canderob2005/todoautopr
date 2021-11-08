<?php

if (!isset($_COOKIE['user'])) {

   header("Location: ../../inicio_index.php");

} else {

   header("Location: ../../anuncio.php");
}
