<?php

require("include/cabecera_index.php");
require("include/menu.php");
require("connect_db.php");
 ?>
<script type="text/javascript">
   


function showform() {

var form = document.getElementById('myform');
form.classList.remove('invisible');
form.classList.add('visible');

}


 

</script>

<!--Formulario de inicio de sesion-->
<div id="div" class="clearfix">
<center>



<form  method="post" action="registro.php" class="was-validated clearfix">


          <div class="form-group">

</center>
    <a href="index.php" class="btn btn-dark float-left"><span class="icon icon-undo2"></span></a>
<br>
<br>

<button onclick="showform()" class="btn-success float-md-right rounded p-1  ">Pagar</button>


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


   echo '<option value="'.$fila[0].'">'.$fila[1].' Monto: '.$fila[2].$coin.'</option>';


}







?>
  </select>


</div>
<?php



$bankinfo=mysqli_query($mysqli,"SELECT owner, acnum  FROM bankinfo ");


while($fila=mysqli_fetch_row($bankinfo))
{


   echo '<h3>Numero de cuenta:<br></h3><h1 id="textoACopiar">'.$fila[1].'</h1>';


}

?>


<div>
   <h2>


     Cancela el monto indicado usando tu 
<center>
<a href="/banco/" target="blank" style="color:black; text-decoration: none;">
      <?php
require("banco/connect_db.php");

$consulta2="SELECT nombre,img,footer FROM app_info WHERE id='1'";

$resultado2=mysqli_query($mysqli,$consulta2);

while($fila=mysqli_fetch_row($resultado2))
{


 echo "<img  width='66' src='/logo/".$app_img=$fila['1']."'/>";
  echo $app_name=$fila['0'];



}


      ?>
</a> 
   </h2>
</center>

</div>
</div>
</div>
<div  style="z-index:999;" class="invisible w-80 h-90 container-md position-absolute top-50 start-50 translate-middle  bg-white m-4 p-4" id="myform">

   <input  class="btn btn-danger float-md-right top-50 " onclick="hide()" type="submit"  value="X"/>
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

 <b>Numero de referencia bancaria.</b>

   <input type="text" name="ref" required="true" required placeholder="codigo"   class="form-control form-control-sm" />

      <div class="invalid-feedback">Comprueba el codigo de actvacion.</div>


   <br>
<script>
   function hide() {
var hides=document.getElementById("myform");


hides.classList.add('invisible');


   }



</script>
   <input  class="btn btn-dark float-md-right" type="submit" name="submit" value="Registrarse"/>








</div>

</form>


   <div>
   <div>


    <div id="alerta" class="alert invisible"></div>
   <button id="btnCopiar" class="btn btn-primary">COPIAR</button><br>


      <script src="paste.js"></script>
