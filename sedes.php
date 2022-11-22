<?php

require("include/cabecera_index.php");
require("include/menu.php");
require("connect_db.php");
 ?>
<div id="div" class="clearfix">
<center>



<form  method="post" action="facultad.php" class="was-validated clearfix">


          <div class="form-group">

</center>
    <a href="index.php" class="btn btn-dark float-left"><span class="icon icon-undo2"></span></a>
    <a href="registrar.php" class="btn btn-warning float-rigth"><span class="">tengo un codigo de inscripcion</span></a>
<br>
<br>


                  <h5 class="text-*-center display-5"> </h5>

   <h5 class="display-5  font-weight-bolder  text-body color-dark float-md-left">Ubicacion</h5>
<hr>
   <br>

<div class="input-group mb-3">
  <label class="input-group-text" for="inputGroupSelect01">Sede</label>
  <select class="form-select" id="inputGroupSelect01" name="sede">

<?php


            $codeprivileges=mysqli_query($mysqli,"SELECT id, sede, ubicacion ,  summary FROM sedes ");


while($fila=mysqli_fetch_row($codeprivileges))
{


   echo '<option value="'.$fila[0].'">'.$fila[1].' Ubicacion: '.$fila[2].'</option>';


}







?>
  </select>


</div>
   <input  class="btn btn-dark float-md-right" type="submit" name="submit" value="Siguiente"/>








</div>

</form>





