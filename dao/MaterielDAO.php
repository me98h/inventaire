<?php
require_once("../models/Materiel.php");

class MaterielDAO
{
    private $db;
    private $materiels;

    public function __construct($db)
    {
        $this->db = $db;
        $this->materiels = [];
    }

    public function allMateriels()
    {
        $sql = "SELECT * FROM materiel";
        $result = $this->db->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $m = new Materiel($row["no_mat"]);
                $m->setNomMateriel($row["nom_materiel"]);
                $m->setCategorie($row["categorie"]);
                $m->setImage($row["image"]);
                $this->materiels[] = $m;
            }
        } else {
            echo "0 results";
        }
        $this->db->close();
        return $this->materiels;
    }


}