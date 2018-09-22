<?php
include "connection.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="img/logo_oi.png">
	

  <title>Sistema central portão</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  
 #painel
 {

margin-top: 10%;

 }
 


 
  #teste{background:white;padding:5%; border: solid 2px black;margin-top: 14%; }
  
  
  </style>
</head>
<body>



<div class="container text-center">
 <?php

$buscapri=$_POST['buscapri'];
$sql = mysql_query ("select * from tbprimarios where idterminal = '".$buscapri."'");
$row = mysql_num_rows($sql);
if ($row > 0)
{
	while ($linha = mysql_fetch_array($sql)){
		
		$idterminal = $linha['idterminal'];
		$eqn =  $linha['eqn'];
		$parp = $linha['parp'];
		$ver = $linha['ver'];
		$hor = $linha['hor'];
		$obs = $linha['obs'];
		$tecnico = $linha['tecnico'];
		$dat = $linha['dat'];
		$central = $linha['central'];
		
		

		
		
		
	}
	
	
	
	
}





?>

<div class="panel-group " id="painel">
    

    <div class="panel panel-primary col-md-4 col-md-offset-4 text-left">
      <div class="panel-heading text-center"><?php echo "$idterminal"; ?></div>
      <div class="panel-body">EQN: <?php echo "$eqn"; ?> </div>
      <div class="panel-body">Primário: <?php echo "$parp"; ?> </div>
      <div class="panel-body">Vertical: <?php echo "$ver"; ?> </div>
      <div class="panel-body">Horizontal: <?php echo "$hor"; ?> </div>
      <div class="panel-body">Obs: <?php echo "$obs"; ?> </div>
      <div class="panel-body">Técnico: <?php echo "$tecnico"; ?> </div>
      <div class="panel-body">Data: <?php echo "$dat"; ?> </div>
      <div class="panel-body">Central: <?php echo "$central"; ?> </div>
         <div class="form-group" >
        &nbsp &nbsp <a href="index.html" class="btn btn-primary"  role="button">Voltar</a>
        </div>
    </div>

  </div>

</div>




</body>
</html>

