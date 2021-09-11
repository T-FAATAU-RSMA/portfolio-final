<?php 
    include __DIR__."./../database/form-imagebdd.php";
    include 'class/classdescription.php';

    /**
     * Manage **Img** objects
     * @extends Description
     * @property string $img_name
     */
    class Image extends Description
    {
    // Propriété de la class img
    public $img_name;
        
    /**
     * create img into 'img' table
     *
     * 
     */
    public function createImg(){

        global $conn;
        $p_description = $this->getDescription();
        // Insérer le nom  et la description dans la table `img` 
        $req_res = "INSERT INTO `img` (`name`, `description`) VALUES ('".$this->img_name."','".$p_description."')";
        $conn->query($req_res);

    }

    /**
     * Get data from 'img' table
     *
     * 
     */
    public function getImg(){
        global $conn;
        // éxécute la requête
        $requ_select = "SELECT * from `img`";
        $res_select = $conn->query($requ_select);
        // faire un retour sur la vue
        return $res_select;
    }   
}




    