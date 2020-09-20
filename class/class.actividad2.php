<?php 

include_once 'class.database.php';

class actividad2{
    protected $db;

    public function __construct(){
        $this->db = new database();
    }
    // INSERT

    // GET
    public function getSO($ID){
        $sql = "SELECT * FROM actividad_2 WHERE activo = 1 ORDER BY SO_YEAR ASC;";
        
        return $this->db->query($sql)->fetchAll();
    }

    public function printSO(){
        $actividad2 = $this->getSO(null);
        foreach ($actividad2 as $Sql):
            $SO_YEAR = $Sql['SO_YEAR'];
            $SO_NAME = $Sql['SO_NAME'];
            $SO_DESCRIPTION = $Sql['SO_DESCRIPTION'];
            if(isset($Sql['SO_VIDEO']) AND  $Sql['SO_VIDEO'] != ""){
                $SO_VIDEO = $Sql['SO_VIDEO'];
                $SO_VIDEO = "<iframe class='centered' width='320' height='240' src='$SO_VIDEO'></iframe>";
            }else{
                $SO_VIDEO = "<br>";
            }
            
            ECHO 
            "<div id='sistema'>
                <div class='row'>
                    <div class='col s12 graybackground'>
                        <h2 style='color:white'> $SO_NAME </h2>
                        <span id='texto'> $SO_DESCRIPTION </span>
                            ". $SO_VIDEO ."
                    </div>
                </div>
            </div>";
        endforeach;
    }

}

?>