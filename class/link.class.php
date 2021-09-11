<?php

include __DIR__."./../database/connexion_bdd.php";

class dblink {
    
    /**
     * Delete link selected from "link"
     *
     * @param int $id 
     *
     */
    public function  deleteDblink($id){
        
        global $connect_bdd; 
        //sql to delete a record
        $sql_delete = "DELETE FROM link WHERE id=".$id;

        // execute la requête précédente
        $connect_bdd->query($sql_delete);

    }
    
    /**
     * Description of function 
     *
     * @return $res_listlink
     */
    public function getDblink(){
        global $connect_bdd; 

        $req_listlink = "SELECT * from link" ; //$req_listlink : contient la requete sql 
        $res_listlink = $connect_bdd->query($req_listlink); //$result de listlink : execute la requete $req_listlink

        return $res_listlink;

    }

        
    /**
     * create dblink into "link"
     *
     * @param string $nom
     */
    public function createDblink($nom,$git,$site){

        global $connect_bdd;
        $sql = "INSERT INTO `link`(`nom`,`git`,`site`) VALUES ('".$nom."' , '".$git."' , '".$site."' )";
        $connect_bdd->query($sql);

    }

    
    
    /**
     * Update Dblink "link"
     *
     * @param string $new_nom 
     *
     */
    public function updateDblink($new_nom,$new_git,$new_site,$id_link){
        global $connect_bdd;

        $sql_update = "UPDATE `link` SET `nom`= '".$new_nom."',`git`= '".$new_git."',`site`= '".$new_site."' WHERE id =".$id_link;
        $connect_bdd->query($sql_update);

    }

}