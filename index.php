<!DOCTYPE html>
<html lang="en">
<head>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Required meta tags -->
    <meta charset="ISO-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    
<?php

    echo "<h2>Listado de artículos NORTHWND por precio</h2>";

    ?>

<form action="buscar.php" method="get">
  <div class="mb-3">
    <label for="exampleInputPrice" class="form-label">Introduce un precio</label>
    <input type="float" class="form-control" id="exampleInputPrice" name="precio">
  
  </div>

  <button type="submit" class="btn btn-primary">Buscar</button>
  <button type="submit" class="btn btn-primary" name="borraCookie" onclick="borrar()" >Eliminar Cookies</button>

</form>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
