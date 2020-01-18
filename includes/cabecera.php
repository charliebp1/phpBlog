<?php require_once 'includes/conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Blog de Videojuegos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./assets/css/styles.css">
</head>
<body>
    <!-- CABECERA -->
    <header id="cabecera">
        <!-- LOGO -->
        <div id="logo">
            <a href="index.php">
                Blog de Videojuegos
            </a>
        </div>
         <!-- MENU -->
    
    <nav id="menu">
        <ul>
            <li>
                <a href="index.php">Inicio</a>
            </li>
            <?php 
                $categorias = conseguirCategorias($db); 
                if(!empty($categorias)):
                    while($categoria = mysqli_fetch_assoc($categorias)): 
            ?>
                <li>
                    <a href="categoria.php?id=<?=$categoria['id']?>"><?=$categoria['nombre']?></a>
                </li>
            <?php 
                    endwhile; 
                endif;   
            ?>
            <li>
                <a href="index.php">Sobre mi</a>
            </li>
            <li>
                <a href="index.php">Contacto</a>
            </li>
            
        </ul>
        
    </nav>
    <div class="clearfix"></div>
    </header>
 <div id="contenedor">