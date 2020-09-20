<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
// echo $_SERVER['PHP_SELF'];
$Directorio = explode('/', $_SERVER['PHP_SELF']);
// print_r($Directorio);
$dots = sizeof($Directorio)-2;
// Cambiar a -1 al subir
$dots = str_repeat(".", $dots);
// CLASES
$actividad2 = $dots."/class/class.actividad2.php";
include_once $actividad2;
?>
<head>
    <meta charset="UTF-8">
    <title>Ninefrm - Maximiliano Fonseca</title>
    <link rel="stylesheet" href="<?php echo $dots; ?>/css/materialize.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--    <link rel="stylesheet" href="CSS/Estilos.css">-->
    <link href="https://fonts.googleapis.com/css?family=Amaranth&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="image/WebIcon.png">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!--Import materialize.css-->
    <script src="<?php echo $dots; ?>/js/materialize.min.js"></script>
    <link type="text/CSS" rel="stylesheet" href="<?php echo $dots; ?>/css/materialize.min.css"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<header class="header" id="myHeader">
    <ul id="dropdown1" class="dropdown-content">
        <li class="divider"></li>
        <li><a href="<?php echo $dots; ?>/Compras_view.php">Compras</a></li>
        <li class="divider"></li>
    </ul>
    <nav>
        <nav class="nav-extended">
            <div class="nav-wrapper">
                <a href="<?php echo $dots; ?>/index.php" class="brand-logo">Ninefrm</a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <div class="center left">
                        <li></li>
                    </div>
                    <div class="center right">
                        <li><a class="dropdown-trigger" href="#!" data-target="dropdown1"><i class="material-icons right">view_module</i></a></li>
                    </div>
                </ul>
            </div>
        </nav>
        <ul class="sidenav" id="mobile-demo">
            <li><a href="Buscar.php"><i class="material-icons">search</i>Buscador</a></li>
        </ul>
    </nav>
    <br><br><br><br>
</header>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var instances = M.AutoInit();
    });
    // NINEFRM - IMPLEMENTACIÓN
    // HEADER STICKY
    window.onscroll = function() {myFunction()};
    var header = document.getElementById("myHeader");
    var sticky = header.offsetTop;
    function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    }
</script>