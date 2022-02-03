<html>
<head>

	<title>Envio de datos</title>
    
</head>
       
<body>
    <?php
    
    $conexion = mysqli_connect("localhost", "root", "", "animalillegal") or die ("problemas de conexión");
          
    mysqli_query($conexion, "INSERT INTO denuncias(nombre,cedula,telefono,ciudad,barrio,animal,descripcion) VALUES ('$_REQUEST[nombre]','$_REQUEST[cedula]','$_REQUEST[telefono]','$_REQUEST[ciudad]','$_REQUEST[barrio]','$_REQUEST[animal]','$_REQUEST[descripcion]')")
    or die("Problemas en el select" . mysqli_error($conexion));
    
    mysqli_close($conexion);
    
    echo "Los datos se enviaron correctamente, Por favor vuelva a la pagina anterior";
    header('Location: http://localhost/animalillegal/datos.html')
    ?>
    
    <!-- Envio de datos DENUNCIAS-->
</body>
            
</html>