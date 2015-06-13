<?php include("header.php");?>

<?php 
  $usuario=$_POST['nombre'];
  $resultado = mysql_query("SELECT * FROM usuarios WHERE nombre='$usuario'");
  if($row = mysql_fetch_array($resultado)){
    if($row["password"]==$_POST['password'] && $row["activo"]==1){
      session_start();
      $_SESSION['id'] = $row["id"];
      header("Location: tienda.php");  
    }
    else{
      header("Location: login.php");  
    }
  }
?>

<?php include("footer.php");?>
