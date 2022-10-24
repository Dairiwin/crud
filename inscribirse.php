<?php

require("include/cabecera_index.php");
require("include/menu.php");
require("connect_db.php");
 ?>


<!--Formulario de inicio de sesion-->
<div id="div" class="clearfix">
<center>
<form method="post" action="registro.php" class="was-validated clearfix">
          <div class="form-group">

    <a href="index.php" class="btn btn-dark float-left"><span class="icon icon-undo2"></span></a>
<br>




                  <h5 class="text-*-center display-5"> </h5>

   <h5 class="display-5  font-weight-bolder  text-body color-dark float-md-left">Inscripcion</h5>
<hr>
   <br>

<div class="input-group mb-3">
  <label class="input-group-text" for="inputGroupSelect01">Carrera</label>
  <select class="form-select" id="inputGroupSelect01">

<?php


				$codeprivileges=mysqli_query($mysqli,"SELECT id, carrera, coste_incrip ,  coste_semes FROM carrera ");


while($fila=mysqli_fetch_row($codeprivileges))
{


   echo '<option value="'.$fila[0].'">'.$fila[1].'</option>';


}



?>
  </select>
</div>

   <input type="text" name="realname"  placeholder="Ingresa tu nombre" class="form-control form-control-sm" />
   <b>Ingresa tu email</b>
   <input type="mail"  name="nick"  placeholder="Ingresa tu mail" class="form-control form-control-sm" />

    <b>CEDULA DE IDENTIDAD</b>
   <input type="number"  name="ci"  placeholder="Ingresa tu CEDULA" class="form-control form-control-sm" />



   <b>Ingresa tu Contraseña</b>
   <input type="password" name="pass" required="true"  placeholder="ingresesa contraseña" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  class="form-control form-control-sm" />

      <div class="invalid-feedback">Por favor asegurate que tu contraseña contenga mas 8 caracteres, una mayuscula y un numero.</div>

   <b>Repite tu contraseña</b>
   <input type="password" name="rpass" required="true" required placeholder="repite contraseña" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  class="form-control form-control-sm" />

      <div class="invalid-feedback">Las contraseñas no coinciden.</div>

 <b>Codigo de activacion</b>

   <input type="text" name="rcode" required="true" required placeholder="codigo"   class="form-control form-control-sm" />

      <div class="invalid-feedback">Comprueba el codigo de actvacion.</div>


   <br>
   <input  class="btn btn-dark float-md-right" type="submit" name="submit" value="Registrarse"/>

</div>
</form>


   <div>