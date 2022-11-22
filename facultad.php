<?php

   $sede=$_POST['sede'];
require("include/cabecera_index.php");
require("include/menu.php");
require("connect_db.php");
 ?>
<div id="div" class="clearfix">
<center>



<form  method="post" action="inscribirse.php" class="was-validated clearfix">

          <div class="form-group">

</center>
    <a href="index.php" class="btn btn-dark float-left"><span class="icon icon-undo2"></span></a>
<br>
<br>


                  <h5 class="text-*-center display-5">
 </h5>

   <h5 class="display-5  font-weight-bolder  text-body color-dark float-md-left">Facultad</h5>
<hr>
   <br>

<div class="input-group mb-3">
  <label class="input-group-text" for="inputGroupSelect01">Facultad</label>
  <select class="form-select" id="inputGroupSelect01" name="facultad">

<?php


            $codeprivileges=mysqli_query($mysqli,"SELECT id, facultad  FROM facultad ");


while($fila=mysqli_fetch_row($codeprivileges))
{


   echo '<option value="'.$fila[0].'">'.$fila[1].'</option>';


}







?>
  </select>

<input type="text"  hidden name="sede" value="<?php echo $sede ?>">
</div>
   <input  class="btn btn-dark float-md-right" type="submit" name="submit" value="Siguiente"/>








</div>

</form>





