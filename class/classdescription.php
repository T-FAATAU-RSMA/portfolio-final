<?php 

/**
 * Manage Description object
 * @property string $img_description
 */
class Description
{
    // Propriété de la class Description
    public $img_description;
    




    
    /**
     * return description
     *
     * @param string $img_description
     * @return $description
     */
    public function getDescription(){
        $p_description = $this->img_description;        
        return $p_description;
    }

}