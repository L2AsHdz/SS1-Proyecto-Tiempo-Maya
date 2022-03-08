<?php
$for = mktime(0, 0, 0, 1, 1, 1720) / (24 * 60 * 60);
$fech = date("U", strtotime($fecha_consultar)) / (24 * 60 * 60);
$idd = $fech - $for;
$nn = $idd % 13;
if($nn<0){
	$nn=12+$nn;
}
$temp = $nn;
if($nn==12){
	$temp = 1;
}else{
	$temp = $nn+2;
}

$Query = $conn->query("SELECT nombre FROM energia WHERE id = ".$temp." ;");
$row = mysqli_fetch_assoc($Query);
$energia = $row['nombre'];

return $energia;
?>
