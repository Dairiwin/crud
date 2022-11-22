ws<meta charset="utf-8">
<script src="js/push.min.js" type="text/javascript"></script>
<?php
   $carrera_inscrip=$_POST['carrera'];
	$realname=$_POST['realname'];
	$mail=$_POST['nick'];
	$pass= $_POST['pass'];
	$rpass=$_POST['rpass'];
	$ref=$_POST['ref'];
	$ci=$_POST['ci'];

	require("connect_db.php");
$create_table=mysqli_query($mysqli,'CREATE TABLE "$mail" ');
;
	$checkemail=mysqli_query($mysqli,"SELECT * FROM login WHERE email='$mail'");
	$check_mail=mysqli_num_rows($checkemail);
		if($pass==$rpass){
			if($check_mail>0){
				echo ' <script language="javascript">window.alert("Este Correo electronico ya esta registrado prueba otro");
				window.focus();	
                window.location="desconectar.php";

				</script> ';

			}else{
			




				$codeprivileges=mysqli_query($mysqliBank,"SELECT monto,benefact FROM move WHERE ref='$ref'");


while($fila=mysqli_fetch_row($codeprivileges))
{
  $privileges=2;


}





				$checkcode=mysqli_query($mysqli,"SELECT 'ref' FROM login WHERE cedula='$ci' OR ref='$ref' ");

				$checkcode=mysqli_num_rows($checkcode);



				$checkDni=mysqli_query($mysqli,"SELECT 'cedula' FROM login WHERE cedula='$ci' ");
				$checkDni=mysqli_num_rows($checkDni);



				if($checkDni<1){}else{
					echo "<script>window.alert('Comprueba Tu numero de cedula ".$ci."'); window.location='desconectar.php';</script>";

				}





				if($checkcode<1){
						echo $ref;

require("connect_db.php");




				mysqli_query($mysqli,"INSERT INTO login (email,passadmin,user,rol,password,img,lastname,cedula,carrera,ref) VALUES('$mail','','$mail','$privileges','$pass','user2.png','nick','$ci','$carrera_inscrip', null)");

				mysqli_query($mysqli,"UPDATE login SET ref = '$ref' WHERE cedula = '$ci' ");


				//echo 'Se ha registrado con exito';
						echo "<script>window.alert('Usuario Creado exitosamente'); window.location='desconectar.php';</script>";
				}

else{
/*si el codigo esta usado  o no esta bn*/
echo "<script>window.alert('Comprueba el codigo ".$ref."'); window.location='desconectar.php';</script>";}

}
			
		}else{
		echo ' <script>window.alert("Las contraseñas no coinciden vuelve a intentarlo");
				window.focus();	
                window.location="desconectar.php";</script> ';

		}

	
?>