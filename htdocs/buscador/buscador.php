<?php include "./php/genera_select.php";?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>
      Document
    </title>
  </head>
  <body>
    <div class="">
      <form action="./buscador.php" method="post">
              <label for="">
      </label>
      <select id="servicio" name="id_serv">
        <?php genera_select("id_serv");?>
      </select>
      <select id="pueblo" name="pueblo">
      </select>
      <!-- <input type="text"/> -->
      <input id="enviar" type="submit" value="Buscar"/>

      </form>

    </div>
    <div class="display">
      <?php include "./php/get_preveedor.php";?>
    </div>
    <script src="./js/buscador.js" type="text/javascript">
    </script>
    <script src="./js/encuentraProveedor.js" type="text/javascript">
    </script>
  </body>
</html>
