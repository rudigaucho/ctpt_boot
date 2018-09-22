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
<script type="text/javascript">
function saidasuccessfully()
{
  setTimeout("window.location='edit_primario.php'",3000);
  
  
}
</script>
<script type="text/javascript">
function saidasuccessfully()
{
  setTimeout("window.location='cad_primario.php'",3000);
  
  
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


$query = "delete from tbprimarios where idterminal='$terminal'";

$sql = mysql_query($query);
if($sql)
{
  
  echo "<h2>Primário excluído com sucesso!</h2>";
  echo "<script>saidasuccessfully()</script>";
  
}
else
{
  
  echo "Erro na edição!";
  
}
?>



</div>




</body>
</html>

