<!DOCTYPE html>
<html lang="en">
<?php include '../templates/header.php'; ?>
<?php $SO = new actividad2(); $getSO = $SO->getSO(null); ?>
    <script>
        $(window).scroll(function() {
            var sistema = document.getElementById("sistema");
            
            

            var y_scroll_pos = window.pageYOffset;

            var fullImage = document.querySelector(".fullImage");
            fullImage = (fullImage.getBoundingClientRect().height-10);
            console.log(fullImage);
            

            var posicion = parseInt(y_scroll_pos/fullImage);

            console.log(y_scroll_pos);
            console.log(posicion);
            
            var dateSystem = document.getElementById("year");

            var Years = <?php echo json_encode($getSO); ?>;
            var Images = <?php echo json_encode($getSO); ?>;
        // set to whatever you want it to be
            switch (posicion) {
                case 0:
                    dateSystem.innerHTML = ("YEAR: " + Years[0]['SO_YEAR']);
                    // $("body").css("background-image","url('./images/practica-2/"+Images[0]['SO_IMAGE']+"')");
                    break;
                case 1:
                    dateSystem.innerHTML = ("YEAR: " +Years[1]['SO_YEAR']);
                    // $("body").css("background-image","url('./images/practica-2/"+Images[1]['SO_IMAGE']+"')");
                    break;
                case 2:
                    dateSystem.innerHTML = ("YEAR: " +Years[2]['SO_YEAR']);
                    // $("body").css("background-image","url('./images/practica-2/"+Images[2]['SO_IMAGE']+"')");
                    break;
                case 3:
                    dateSystem.innerHTML = ("YEAR: " +Years[3]['SO_YEAR']);
                    // $("body").css("background-image","url('./images/practica-2/"+Images[3]['SO_IMAGE']+"')");
                    break;
                case 4:
                    dateSystem.innerHTML = ("YEAR: " +Years[4]['SO_YEAR']);
                    // $("body").css("background-image","url('./images/practica-2/"+Images[4]['SO_IMAGE']+"')");
                    break;
                case 5:
                    dateSystem.innerHTML = ("YEAR: " +Years[5]['SO_YEAR']);
                    // $("body").css("background-image","url('./images/practica-2/"+Images[5]['SO_IMAGE']+"')");
                    break;
                case 6:
                    dateSystem.innerHTML = ("YEAR: " +Years[6]['SO_YEAR']);
                    // $("body").css("background-image","url('./images/practica-2/"+Images[6]['SO_IMAGE']+"')");
                    break;
                case 7:
                    dateSystem.innerHTML = ("YEAR: " +Years[7]['SO_YEAR']);
                    // $("body").css("background-image","url('./images/practica-2/"+Images[7]['SO_IMAGE']+"')");
                    break;
                case 8:
                    dateSystem.innerHTML = ("YEAR: " +Years[8]['SO_YEAR']);
                    // $("body").css("background-image","url('./images/practica-2/"+Images[8]['SO_IMAGE']+"')");
                    break;
                case 9:
                    dateSystem.innerHTML = ("YEAR: " +Years[9]['SO_YEAR']);
                    // $("body").css("background-image","url('./images/practica-2/"+Images[9]['SO_IMAGE']+"')");
                    break;
                case 10:
                    dateSystem.innerHTML = ("YEAR: " +Years[10]['SO_YEAR']);
                    // $("body").css("background-image","url('./images/practica-2/"+Images[10]['SO_IMAGE']+"')");
                    break;
                case 11:
                    dateSystem.innerHTML = ("YEAR: " +Years[11]['SO_YEAR']);
                    // $("body").css("background-image","url('./images/practica-2/"+Images[11]['SO_IMAGE']+"')");
                    break;
                case 12:
                    dateSystem.innerHTML = ("YEAR: " +Years[12]['SO_YEAR']);
                    // $("body").css("background-image","url('./images/practica-2/"+Images[12]['SO_IMAGE']+"')");
                    break;
                // case 13:
                //     dateSystem.innerHTML = ("YEAR: " +Years[13]['SO_YEAR']);
                //     // $("body").css("background-image","url('./images/practica-2/"+Images[13]['SO_IMAGE']+"')");
                //     break;
                default:
                    dateSystem.innerHTML = ("YEAR: ACTUALIDAD");
                    break;
            }
        });
    </script>
    <style>
        body {
            background-color: black;
        }
        #myHeader{
            height: 65px !important;
        }
    </style>
    <div id="year"> YEAR: <?php echo $getSO[0]['SO_YEAR']; ?> </div>
    <div>
        <?php $SO->printSO(); ?>
    </div>
    <div class='fullImage white-text' style='background-image: url(./images/practica-2/ALLSO.jpg)'>
        <div class="container graybackground" id="sistema"> 
            <h2> Ventajas y Desventajas en la actualidad </h2>
            <div class="divider"></div>
            <div class="row">
            <div class="section">
                <h4>Windows</h4>
                <ul class="collection">
                    <li class="collection-header"><h5>Ventajas</h5></li>
                    <div class="divider"></div>
                    <li>Es más conocido</li>
                    <div class="divider"></div>
                    <li>Es el que tiene más software desarrollado.</li>
                    <div class="divider"></div>
                    <li>Modo Oscuro.</li>
                    <div class="divider"></div>
                    <li>Un sistema más ligero y que consume menos recursos.</li>
                    <div class="divider"></div>
                    <li>Escritorios virtuales.</li>
                    <div class="divider"></div>

                    <li class="collection-header"><h5>Desventajas</h5></li>
                    <div class="divider"></div>
                    <li>El 90% de malwares están desarrollados a base de las vulnerabilidades de Windows.</li>
                    <div class="divider"></div>
                    <li>Puedes tener errores de compatibilidad en sistemas nuevos.</li>
                    <div class="divider"></div>
                    <li>Historicamente es más inestable de los 3.</li>
                    
                </ul>
                <h4>Apple/MAC OS</h4>
                <ul class="collection">
                    <li class="collection-header"><h5>Ventajas</h5></li>
                    <div class="divider"></div>
                    <li>Mejor interfaz grafica del mercado</li>
                    <div class="divider"></div>
                    <li>Ideal para diseño grafico.</li>
                    <div class="divider"></div>
                    <li>Es muy estable.</li>
                    <div class="divider"></div>
                    <li>Rendimiento espectacular.</li>
                    <div class="divider"></div>
                    <li>Diseño muy cuidado.</li>
                    <div class="divider"></div>
                    <li>Software y hardware dedicado.</li>
                    <div class="divider"></div>
                    <li>Mayor productividad.</li>
                    <div class="divider"></div>
                    <li>En Mac no hay virus (o casi).</li>
                    <div class="divider"></div>
                    <li class="collection-header"><h5>Desventajas</h5></li>
                    <div class="divider"></div>
                    <li>Costoso (aunque viene incluido con la maquina).</li>
                    <div class="divider"></div>
                    <li>La cantidad de software desarrollado para Mac OS es limitada.</li>
                    <div class="divider"></div>
                    <li>Es más complicado encontrar gente que la pueda arreglar en caso de fallas.</li>
                    <div class="divider"></div>
                    <li>Al ser equipos previamente ensamblados normalmente no son expandibles su hardware.</li>
                    <div class="divider"></div>
                </ul>
                <h4>Linux</h4>
                <ul class="collection">
                    <li class="collection-header"><h5>Ventajas</h5></li>
                    <div class="divider"></div>
                    <li>OPEN SOURCE, por ende es gratis su uso.</li>
                    <div class="divider"></div>
                    <li>Tienes una enorme cantidad de software libre para este sistema.</li>
                    <div class="divider"></div>
                    <li>Mayor estabilidad por algo lo usan en servidores de alto rendimiento</li>
                    <div class="divider"></div>
                    <li>El entorno grafico es infinitamente personalizables.</li>
                    <div class="divider"></div>
                    <li>Existen distribuciones de Linux para diversos tipos de equipo, para todo tipo de procesador (ARM, 32BITS, 64BITS, etc).</li>
                    <div class="divider"></div>
                    <li>Las vulneralidades son detectadas y corregidas más rapidamente que cualquier otro sistema operativo, ya que al poder aportar a su código esto es más flexible.</li>
                    <div class="divider"></div>
                    <li class="collection-header"><h5>Desventajas</h5></li>
                    <div class="divider"></div>
                    <li>Para gustos colores, una de sus desventajas en el mercado es que el 80% de instalaciones, y actualizaciones es mejor desde consola.</li>
                    <div class="divider"></div>
                    <li>No Existe mucho software comercial.</li>
                    <div class="divider"></div>
                    <li>Recientemente el acuerdo de Windows por integrar Linux hace ya un poco inecesaria su instalación como SO Principal.</li>
                    <div class="divider"></div>
                </ul>
            </div>
        </div>
    </div>
    
</html>