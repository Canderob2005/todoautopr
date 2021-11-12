<?php

function select_ano()
{
   echo '<select class="w3-select" name="option" style="width: 100%;" id="year">';

   $hasta = date("Y") + 2;
   $desde = 1960;

   for ($i = $hasta; $i >= $desde; $i--) {

      // echo "<br/>";

      echo "<option value='$i'>$i</option>";

   }
   echo "</select>";

}
select_ano();
