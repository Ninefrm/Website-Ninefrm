<!DOCTYPE html>
<html lang="en">
<?php include '../templates/header.php'; ?>
<?php $SO = new actividad3();?>
<script>
// Encender y apagar
var PC_status = 0;

function Power() {
    if (PC_status == 0) {
        PC_toast =
            '<span>Se ha encendido el sistema</span><button class="btn-flat toast-action" onclick="M.Toast.dismissAll()">X</button>';
        M.toast({
            html: PC_toast
        })
        document.getElementById("Power_Button").className = "btn-floating btn-large red";
        PC_status = 1;
    } else {
        PC_status = 0;
        PC_toast =
            '<span>Se ha apagado el sistema</span><button class="btn-flat toast-action" onclick="M.Toast.dismissAll()">X</button>';
        M.toast({
            html: PC_toast
        })
        document.getElementById("Power_Button").className = "btn-floating btn-large green pulse";
        PC_status = 0;
        // HiddenToShow('Linux');
        // HiddenToShow('Windows');
        document.getElementById('blackScreen').classList.remove("hidden");
        document.getElementById('Linux').classList.add("hidden");
        document.getElementById('Windows').classList.add("hidden");
    }
}

//Cambiar hidden a show
function HiddenToShow(ID_Name, ID_Other) {

    var element = document.getElementById(ID_Name);
    // console.log()
    if (PC_status == 0) {
        PC_toast =
            '<span>Es necesario encender el sistema.</span><button class="btn-flat toast-action" onclick="M.Toast.dismissAll()">X</button>';
        M.toast({
            html: PC_toast
        })
    } else {
        if (element.classList.contains("hidden") && PC_status == 1) {
            document.getElementById('blackScreen').classList.add("hidden");
            document.getElementById(ID_Other).classList.add("hidden");
            element.classList.remove("hidden");
        } else {
            element.classList.add("hidden");
            document.getElementById('blackScreen').classList.remove("hidden");
        }
    }
}
</script>
<div class="row">
    <div class="col s1"></div>
    <div class="col s12 m3 center">
        <table class="striped">
            <thead>
                <th class="center" colspan="4">
                    <a onclick="Power()" class="btn-floating btn-large green pulse" id="Power_Button">
                        <i class="material-icons">power_settings_new</i>
                    </a>
                </th>
            </thead>
            <tbody>
                <tr>
                    <td class="center pointer" colspan="2">
                        <a onclick="HiddenToShow('Linux', 'Windows')" style="color: green;" id="USB_Linux">
                            <i class="material-icons">usb</i><br> <span> Linux </span>
                        </a>
                    </td>
                    <td class="center pointer" colspan="2">
                        <a onclick="HiddenToShow('Windows', 'Linux')" id="USB_Windows">
                            <i class="material-icons">usb</i><br> <span> Windows </span>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="justificado">
            <span>
                En conclusión vemos que el proceso de instalación es muy similar, obviamente al estar más
                familiarizado con el entorno en windows
                esto se ve un poco más sencillo de entender, ya que el proceso de instalación es
                completamente "apretar ok", en cambio en Linux
                es necesario conocer lo que es una red, lo que es un perfil de administrador, y una cuenta
                de usuario, una vez escribiendo en el
                disco duro todo es igual en cuanto a terminar y comenzar a usar el nuevo sistema.
            </span>
        </div>
    </div>
    <div class="col s1"></div>
    <div class="col s12 m5 border">
        <div class="center black maxVH" id="blackScreen"></div>
        <div class="center hidden maxVH" id="Linux">
            <?php $SO->getCards("Linux");  ?>
        </div>
        <div class="center hidden maxVH" id="Windows">
            <?php $SO->getCards("Windows");  ?>
        </div>
    </div>
    <div class="col s1"></div>
</div>

</html>