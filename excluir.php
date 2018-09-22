


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
  
 
 
 body
 {
	 
     background:black;
	 
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



<div class="container text-center">
  <div class="row content">
   
    <div class="col-sm-3 text-center col-md-offset-4" id="teste" >
	<form role="form" name="seachform" method="post" action="exc.php " >
  <div class="form-group" >
    <label for="email">Digite o número do terminal para excluir: </label>
    <input type="text" class="form-control" name="terminal" >
    
  </div>
  <button type="submit" value="Excluir" class="btn btn-default">Excluir</button>
  
</form>


  
  </div>
</div>




</body>
</html>

