<?php 
require_once("../dao/MaterielDAO.php");
class InventaireService {
    private $materielDAO;
    private $PretDAO;
    public function __construct($materielDAO,$PretDAO)
    {
        $this->materielDAO = $materielDAO;
         $this->PretDAO = $PretDAO;
    }
    public function listerMateriel(){
        return $this->materielDAO->allMateriels();
    }
    public function listerPret(){
        return $this->PretDAO->allPrets();
    }
}
?>