<!DOCTYPE html>
<html lang="en">
<?php include '../templates/header.php'; ?>
<?php $SO = new actividad2(); $getSO = $SO->getSO(null); ?>
    <script>
        $(window).scroll(function() {
            var sistema = document.getElementById("sistema");
            var y_scroll_pos = window.pageYOffset;
            var posicion = parseInt(y_scroll_pos/900);

            console.log(y_scroll_pos);
            console.log(posicion);
            
            var dateSystem = document.getElementById("year");

            var Years = <?php echo json_encode($getSO); ?>;
            var Images = <?php echo json_encode($getSO); ?>;
        // set to whatever you want it to be
            switch (posicion) {
                case 0:
                    dateSystem.innerHTML = ("YEAR: " + Years[0]['SO_YEAR']);
                    $("body").css("background-image","url('./images/practica-2/"+Images[0]['SO_IMAGE']+"')");
                    break;
                case 1:
                    dateSystem.innerHTML = ("YEAR: " +Years[1]['SO_YEAR']);
                    $("body").css("background-image","url('./images/practica-2/"+Images[1]['SO_IMAGE']+"')");
                    break;
                case 2:
                    dateSystem.innerHTML = ("YEAR: " +Years[2]['SO_YEAR']);
                    $("body").css("background-image","url('./images/practica-2/"+Images[2]['SO_IMAGE']+"')");
                    break;
                case 3:
                    dateSystem.innerHTML = ("YEAR: " +Years[3]['SO_YEAR']);
                    $("body").css("background-image","url('./images/practica-2/"+Images[3]['SO_IMAGE']+"')");
                    break;
                case 4:
                    dateSystem.innerHTML = ("YEAR: " +Years[4]['SO_YEAR']);
                    $("body").css("background-image","url('./images/practica-2/"+Images[4]['SO_IMAGE']+"')");
                    break;
                case 5:
                    dateSystem.innerHTML = ("YEAR: " +Years[5]['SO_YEAR']);
                    $("body").css("background-image","url('./images/practica-2/"+Images[5]['SO_IMAGE']+"')");
                    break;
                case 6:
                    dateSystem.innerHTML = ("YEAR: " +Years[6]['SO_YEAR']);
                    $("body").css("background-image","url('./images/practica-2/"+Images[6]['SO_IMAGE']+"')");
                    break;
                case 7:
                    dateSystem.innerHTML = ("YEAR: " +Years[7]['SO_YEAR']);
                    $("body").css("background-image","url('./images/practica-2/"+Images[7]['SO_IMAGE']+"')");
                    break;
                case 8:
                    dateSystem.innerHTML = ("YEAR: " +Years[8]['SO_YEAR']);
                    $("body").css("background-image","url('./images/practica-2/"+Images[8]['SO_IMAGE']+"')");
                    break;
                case 9:
                    dateSystem.innerHTML = ("YEAR: " +Years[9]['SO_YEAR']);
                    $("body").css("background-image","url('./images/practica-2/"+Images[9]['SO_IMAGE']+"')");
                    break;
                case 10:
                    dateSystem.innerHTML = ("YEAR: " +Years[10]['SO_YEAR']);
                    $("body").css("background-image","url('./images/practica-2/"+Images[10]['SO_IMAGE']+"')");
                    break;
                case 11:
                    dateSystem.innerHTML = ("YEAR: " +Years[11]['SO_YEAR']);
                    $("body").css("background-image","url('./images/practica-2/"+Images[11]['SO_IMAGE']+"')");
                    break;
                case 12:
                    dateSystem.innerHTML = ("YEAR: " +Years[12]['SO_YEAR']);
                    $("body").css("background-image","url('./images/practica-2/"+Images[12]['SO_IMAGE']+"')");
                    break;
                case 13:
                    dateSystem.innerHTML = ("YEAR: " +Years[13]['SO_YEAR']);
                    $("body").css("background-image","url('./images/practica-2/"+Images[13]['SO_IMAGE']+"')");
                    break;
                default:
                    break;
            }
        });
    </script>
    <style>
        body {
            background: no-repeat center center fixed; 
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
    </style>
    <div id="year"> YEAR: <?php echo $getSO[0]['SO_YEAR']; ?> </div>
    <div class="container">
        <?php $SO->printSO(); ?>
    </div>
</html>