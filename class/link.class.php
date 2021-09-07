<?php

include __DIR__."./../database/connexion_bdd.php";

class dblink {
    
    /**
     * Delete book selected from "livres"
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
     * @return $res_listLivres
     */
    public function getDblink(){
        global $connect_bdd; 

        $req_listlink = "SELECT * from link" ; //$sql : contient la requete sql 
        $res_listlink = $connect_bdd->query($req_listlink); //$result : execute la requete $sql

        return $res_listlink;

    }

        
    /**
     * create dbshoop into "livres"
     *
     * @param string $nom
     * @param int $prix
     *
     */
    public function createDblink($nom,$git,$site){

        global $connect_bdd;
        $sql = "INSERT INTO `link`(`nom`,`git`,`site`) VALUES ('".$nom."' , '".$git."' , '".$site."' )";
        $connect_bdd->query($sql);

    }

    
    
    /**
     * Update DbShoop "livres"
     *
     * @param string $new_nom 
     * @param int $new_prix 
     * @param int $id_livre
     *
     */
    public function updateDblink($new_nom,$new_git,$new_site,$id_link){
        global $connect_bdd;

        $sql_update = "UPDATE `link` SET `nom`= '".$new_nom."',`git`= '".$new_git."',`site`= '".$new_site."' WHERE id =".$id_link;
        $connect_bdd->query($sql_update);

    }

}