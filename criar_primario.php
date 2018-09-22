<?php
include "connection.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
<script type="text/javascript">
function saidasuccessfully()
{
  setTimeout("window.location='index.html'",3000);
  
  
}
</script>
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
  
  
    .btn
    {

      background: green;
    }
    .btn:hover
    {

      background: #7BEB1C;
      color:black;
    }
  </style>
</head>
<body>



<div class="container ">
<?php
$terminal =$_POST['terminal'];
$eqn =$_POST['eqn'];
$primario =$_POST['primario'];
$vertical =$_POST['vertical'];
$horizontal =$_POST['horizontal'];
$tecnico =$_POST['tecnico'];
$data =$_POST['date'];
$central =$_POST['central'];
$obs =$_POST['obs'];

$query = "insert into tbprimarios (idterminal,eqn,parp,ver,hor,obs,tecnico,dat,central)";
$query.= "values ('$terminal','$eqn','$primario','$vertical','$horizontal','$obs','$tecnico','$data','$central')";

$sql = mysql_query($query);
if($sql)
{
  
  echo "<h2>Primário cadastrado com sucesso!</h2>";
  echo "<script>saidasuccessfully()</script>";
  
}
else
{
  
  echo "Erro no cadastro!";
  
}
?>



</div>




</body>
</html>

