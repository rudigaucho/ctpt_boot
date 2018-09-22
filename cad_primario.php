
<?php
include "connection.php";
$sql = mysql_query ("select count(*) as conta from tbprimarios" );
$row = mysql_num_rows($sql);

if (mysql_num_rows($sql) > 0)

{
  while ($dado = mysql_fetch_assoc($sql))
  {


     
 $num = $dado ["conta"];  
}
}


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
  <link rel="icon" href="img/key.png">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  </script>
  <style>
  
 #voltar
 {

float:right;

 }
 
 body
 {
	 
     background:black;
	 
 }

 
  #teste{background:white;padding:1%; border: solid 2px black;margin-top: 0%; }
  
  
    .btn
    {

      background: green;
    }
    .btn:hover
    {

      background: #7BEB1C;
      color:black;
    }

    #edit
    {
       background: #F47315;
       


    }

    #edit:hover
    {

     background: #F4BE0D;


    }
  </style>
</head>
<body>




<div class="container">
  <div class="row content">
   
    <div class="col-sm-8  col-md-offset-2" id="teste" >
	<form role="form" name="seachform" method="post" action="criar_primario.php " >
  <div class="form-group" >
  <span class="label label-danger" style="float:right;"><?php echo $num;?></span><br>
    <label for="email">Terminal: </label>
    <input type="text" class="form-control" name="terminal" required >
    <label for="email">Eqn: </label>
    <input type="text" class="form-control" name="eqn"  required >
    <label for="email">Primário: </label>
    <input type="text" class="form-control" name="primario" required >
    <label for="email">Vertical: </label>
    <input type="text" class="form-control" name="vertical" >
    <label for="email">Horizontal: </label>
    <input type="text" class="form-control" name="horizontal" >
    <label for="email">Técnico: </label>
    <input type="text" class="form-control" name="tecnico" ><br>
    <label  for="data">
       Data
      </label>
    <!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> 

<!--Font Awesome (added because you use icons in your prepend/append)-->
<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />

<!-- Inline CSS based on choices in "Settings" tab -->
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>

<!-- HTML Form (wrapped in a .bootstrap-iso div) -->
<div class="bootstrap-iso">
 
  <div class="row">
  
    
     <div class="form-group ">
      
      <div class="col-sm-10">
       <div class="input-group">
        <div class="input-group-addon">
         <i class="fa fa-calendar">
         </i>
        </div>
        <input class="form-control" id="date" name="date" placeholder="DD/MM/AAAA" type="text"/>
       </div>
      </div>
     </div>
    
  
   
  </div>

</div>


<!-- Extra JavaScript/CSS added manually in "Settings" tab -->
<!-- Include jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script>
 $(document).ready(function(){
  var date_input=$('input[name="date"]'); //our date input has the name "date"
  var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
  date_input.datepicker({
   format: 'dd/mm/yyyy',
   container: container,
   todayHighlight: true,
   autoclose: true,
  })
 })
</script>

<br>

  
     <div class="form-group">
  <label for="sel1">Central:</label>
  <select class="form-control " id="central" name="central"  >


    <option value="CTPT">  CTPT </option>
<option value="CTFZ" > CTFZ  </option>
<option value="CTKA">  CTKA </option>
<option value="CTAV"> CTAV   </option>
<option value="CTSQ"> CTSQ   </option>
  </select>
</div>
<label for="email">Obs: </label>
  <textarea class="form-control" rows="5" id="descricao" name="obs"></textarea>


    
  </div>
  <button type="submit" value="Cadastrar" class="btn btn-default">Cadastrar</button>&nbsp <a href="edit_primario.php" class="btn btn-info" id="edit" role="button">Editar</a>&nbsp <a href="excluir.php" class="btn btn-info" id="edit" role="button">Excluir</a>
  <div class="form-group " id="voltar" >
        &nbsp &nbsp <a href="index.html"  role="button">Voltar</a>
        </div>
  
</form>


  
  </div>
</div>




</body>
</html>

