<!DOCTYPE HTML>
<?php
require("connect_db.php");


?>

</head>
<body style="background-color: darkgrey;">
<div class="container-fluid" style="background-color: darkgrey;">



<link rel="stylesheet" href="/bootstrap/4.3.1/css/bootstrap.css">
<header class="header">
  <?php

include("include/cabecera.php");

include("include/menu.php");

require("include/cabecera_admin.php");
  ?>



<!-- Latest compiled and minified CSS -->


<!-- jQuery library -->
<link rel="stylesheet" href="/bootstrap/js/jquery.js">


<link rel="stylesheet" href="/bootstrap/js/jquery-1.8.3.min.js">


<!-- Popper JS -->
<script src="/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="/bootstrap/4.3.1/js/bootstrap.js"></script>



<!--Contenido de la pagina-->
<section style="background-color: darkgrey;">
<?php





require("connect_db.php");



$consulta2="SELECT header,content,active,active_slider,coin FROM config WHERE id='1'";

$resultado2=mysqli_query($mysqli,$consulta2);

while($fila=mysqli_fetch_row($resultado2))
{
  $header=$fila['0'];
  $content=$fila['1'];
$active=$fila['2'];
$active_slider=$fila['3'];
$coin=$fila['4'];
}

$consulta2="SELECT nombre,img,description,footer,aboutus FROM app_info WHERE id='1'";

$resultado2=mysqli_query($mysqli,$consulta2);

while($fila=mysqli_fetch_row($resultado2))
{
  $app_name=$fila['0'];
  $app_img=$fila['1'];

  $description=$fila['2'];
  $footer=$fila['3'];
  $aboutus=$fila['4'];

}



?>

<h1 style="opacity: 0;">Articulo</h1>
<div class="jumbotron">
<h1 class="display-4">Configurar el hader de la pagina</h1> 
<form accept-charset="utf-8" method="post" action="config_header.php" class="was-validated">
  <div class="custom-control custom-switch">
    <input type="checkbox" class="custom-control-input" id="switch1" name="active" <?php if($active=='on'){ echo "checked";} ?> value="on">
    <label class="custom-control-label" for="switch1">Cabecera</label>
  </div> 
  <div class="custom-control custom-switch">
  
  <input type="checkbox" class="custom-control-input" id="switch2" name="active_slider" <?php if($active_slider=='on'){ echo "checked";} ?> value="on">
    <label class="custom-control-label" for="switch2">Slider</label>
  </div> <hr>  
<input type="text" style="font-size:5vh;" class="form-control" required name="header" value="<?php echo$header;?>"/> 
  <p>
<textarea type="text"  name="content"  required class="form-control"><?php echo$content;?></textarea> 
<br>
<label for="color">Color de cabecera</label>
<input type="color" class="form-control"  style=" width:10vw; padding:none; border:0px; margin:0px;" name="color" id="color">

  <h1>Moneda</h1>
<input type="text" style="font-size:5vh;" class="form-control" required name="coin" value="<?php echo$coin;?>"/> 
  <p>
<button type="submit" class="btn btn-primary float-md-right" style="font-size:3vh;" font-family:arial black;>Guardar</button>

<label for="color-gradient">Color de gradiente 1</label>
<input type="color" class="form-control"  style=" width:10vw; padding:none; border:0px; margin:0px;" name="color_gradient" id="color_gradient">


<label for="color-gradient2">Color de gradiente 2</label>
<input type="color" class="form-control"  style=" width:10vw; padding:none; border:0px; margin:0px;" name="color_gradient2" id="color_gradient2">


<label for="color-gradient3">Color de gradiente 1</label>
<input type="color" class="form-control"  style=" width:10vw; padding:none; border:0px; margin:0px;" name="color_gradient3" id="color_gradient3">

</form>
</p> 


</div>

<!--Contenido de la pagina-->

<div id="div">

<h1 class="display-4">Configurar el Nombre y logo de la pagina de la pagina</h1>
<form accept-charset="utf-8" action="update_app_info.php" enctype="multipart/form-data" method="POST">

          <div class="form-group">

                  <h5 class="text-*-center display-5"> </h5>

   <br>

   <b>Nombre </b>
   <input type="text" name="name_app"  required placeholder="nombre" class="form-control form-control-sm" value="<?php echo $app_name; ?>"/>


   <br>

   <b>Descripcion </b>
   <textarea type="text" name="description"  required placeholder="Descripcion" class="form-control form-control-sm" ><?php echo $description; ?></textarea>

   <br>


   <h1>Pie de pagina</h1>

<textarea type="text"  name="footer"  required class="form-control"><?php echo$footer;?></textarea> 
<br>



<br>



<br>
<center><img src="/logo/<?php echo $app_img;?>"></center><br><br>
<input type="file" name="imagen" class='form-control form-control-sm'>
<br>
   <input  class="btn btn-primary float-md-right" type="submit" name="submit" value="Guardar"/><br>

</div>
</form>



</div>
</section>


<!-- Pie de pagina-->

<footer id="footer">
<center>
&copy;<?php echo $titulo."</h1>"; ?>
 </footer>
<!-- /container -->
  <script src="demo-files/liga.js"></script>
  <script src="demo-files/demo.js"></script>

  </body>
</html>
