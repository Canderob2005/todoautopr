<?php

$pass = password_hash("Carlop", PASSWORD_DEFAULT);

if (password_verify('Carlos', $pass)) {

   echo '¡La contraseña es válida!';

} else {

   echo 'La contraseña no es válida.';
}
