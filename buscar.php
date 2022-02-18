<!DOCTYPE html>
<html lang="en">
<head>
<!-- <meta charset="UTF-16"> -->
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"/>


    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<?php


//eliminar cookie
function borrar(){
    $borrarcookie=setcookie("precio",$precio_buscado, –0);
}


//consulta cookie



    $precio_buscado=$_GET["precio"];
    setcookie("precio", $precio_buscado);
    $precio_buscado=$_COOKIE["precio"];

//conexión a base de datos
    $conexion=mysqli_connect("localhost", "root","" , "northwind");
    //var_dump($conexion);

//consulta
$consulta="SELECT * FROM products WHERE UnitPrice <'$precio_buscado' order by UnitPrice asc";
//$consulta="SELECT * FROM products WHERE ProductName='$busqueda'";

//ejecutar la consola
    $cursor=$conexion->query($consulta);
    //var_dump($cursor);


//mostrar resultado
    echo "<table class='table'>";
        echo "<tr>
                <th scope='col'>codigo</th>
                <th scope='col'>nombre</th>
                <th scope='col'>unidades</th>
                <th scope='col'>precio</th>
            </tr>";
        while($fila=$cursor->fetch_row()){
            //var_dump($fila);
            echo "<tr>";
                echo "<td>".$fila[0]."</td>";
                echo "<td>".$fila[1]."</td>";
                echo "<td>".$fila[6]."</td>";
                echo "<td>".$fila[5]."</td>";
            echo "</tr>";
        }

    echo "</table>";

    ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
