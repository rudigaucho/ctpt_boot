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
<div class="form-group" >
        &nbsp &nbsp <a href="index.html" class="btn btn-link"  role="button">Voltar</a>
        </div>



<div class="container ">
 <div class="table-responsive">
  <table class="table table-hover">
    <thead>
      <tr >
        <th>Estação</th>
        <th>Armário</th>
        <th>Endereço</th>
  
      </tr>
    </thead>
  
  <?php

$buscaard = $_POST['buscaard'];
$sql = mysql_query ("select * from armarios where ard like '%".$buscaard."%'" );
$row = mysql_num_rows($sql);

if (mysql_num_rows($sql) > 0)

{
  while ($dado = mysql_fetch_assoc($sql)){
?>
    <tbody>
      <tr class="success">
     
<td> <?php echo $dado ["estacao"];  ?></td>
<td> <?php echo $dado ["ard"];  ?></td>
<td> <?php echo $dado ["end_ard"];  ?></td>

      </tr>
  <?php }  }   
   
    ?>
    
  </table>
</div>



</div>




</body>
</html>

