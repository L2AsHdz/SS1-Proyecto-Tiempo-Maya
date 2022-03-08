<?php 
$conn = include "conexion/conexion.php";

if(isset($_GET['fecha'])){
$fecha_consultar = $_GET['fecha'];
}else{
date_default_timezone_set('US/Central');  
$fecha_consultar = date("Y-m-d");
}

$nahual = include 'backend/buscar/conseguir_nahual_nombre.php';
$energia = include 'backend/buscar/conseguir_energia_numero.php';
$haab = include 'backend/buscar/conseguir_uinal_nombre.php';
$cuenta_larga = include 'backend/buscar/conseguir_fecha_cuenta_larga.php';
$cholquij = $nahual."";
$energia2 = $energia."";

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Tiempo Maya</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <?php include "blocks/bloquesCss.html" ?>
  <link rel="stylesheet" href="css/estilo.css?v=<?php echo(rand()); ?>" />
  <link rel="stylesheet" href="css/estiloAdmin.css?v=<?php echo(rand()); ?>" />

    <link rel="stylesheet" href="css/index.css?v=<?php echo (rand()); ?>" />


</head>

<body>

<?php include "NavBar.php" ?>
 <div>
 <section id="inicio">
    <div id="inicioContainer" class="inicio-container">
      <h1><br><br>Bienvenido al Tiempo Maya</h1>
      <div id='formulario' style="padding: 15px; width: 400px; height: 340px;">
      <h4 style="color: black;">Calendario Haab :</h4>
      <?php
        echo "<img src=\"images/kin/".$haab[1].".svg\"  width=\"50\" height=\"50\">&nbsp;&nbsp;";
        echo "<span style=\"color: black;\">(".$haab[1].")</span>&nbsp;";
        echo "<img src=\"images/uinal/".$haab[0].".svg\"  width=\"50\" height=\"50\">&nbsp;";
        echo "<span style=\"color: black;\">(".$haab[0].")</span>";
      ?>
      <h5></h5>
      <h4 style="color: black;">Calendario Cholquij :</h4>
      <?php
        echo "<img src=\"images/energia/".$energia2.".svg\"  width=\"50\" height=\"50\">";
        echo "<span style=\"color: black;\">(".$energia2.")</span>&nbsp;&nbsp;&nbsp;";
        echo "<img src=\"images/nahual/".$cholquij.".svg\"  width=\"50\" height=\"50\">&nbsp;&nbsp;";
        echo "<span style=\"color: black;\">(".$cholquij.")</span>";
      ?>
      <h5></h5>
      <h4 style="color: black;">Cuenta Larga : <?php echo isset($cuenta_larga) ? $cuenta_larga : ''; ?></h4>
      <label style="color: black;"><?php echo isset($fecha_consultar) ? $fecha_consultar : ''; ?></label>
</div>
    </div>
  </section>
 </div>
 
  
  <?php include "blocks/bloquesJs1.html" ?>

</body>
</html>
