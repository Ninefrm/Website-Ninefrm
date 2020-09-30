<?php

include_once 'class.database.php';

class actividad3{
    protected $db;

    public function __construct(){
        $this->db = new database();
    }

    public function getCards($SO_NAME){

        $sql = "SELECT * FROM actividad_3 WHERE ACT3_ACTIVO = 1 AND ACT3_SO = '$SO_NAME' ORDER BY ACT3_ID ASC;";
        
        $Cards = $this->db->query($sql)->fetchAll();
        $i = 0;
        $Card_Open = "<div class='card'><div class='row'>";
        $Close = "
        </div></div>";
        $Open_Tab = "<div class='col s12'>
                        <ul class='tabs'>";
        $Close_Tab = "  </ul>
                    </div>";
        $Tabs = "";
        $Card = "";

        foreach ($Cards as $Sql):
            $ACT3_IMG = $Sql['ACT3_IMG'];
            $ACT3_TXT = $Sql['ACT3_TXT'];
            $ACT3_TITLE = $Sql['ACT3_TITLE'];
            $i = $i + 1;
            $DivID = $SO_NAME.$i;
            $Card = $Card . "
                <div id='$DivID' class='col s12'>
                    <div class='card-image'>
                        <img src='images/practica-3/$ACT3_IMG'>
                        <span class='card-title graybackground left-align'>
                            $ACT3_TITLE
                        </span>
                    </div>
                    <div class='card-content left-align'>
                        <p>$ACT3_TXT</p>
                    </div>
                </div>
            ";
            $Tabs = $Tabs."<li class='tab col s2'><a href='#$DivID' title='$ACT3_TITLE'>$ACT3_TITLE</a></li>";
        endforeach;


        $ALL = $Card_Open.$Open_Tab.$Tabs.$Close_Tab.$Card.$Close;
        
        ECHO $ALL;

    }
}

?>