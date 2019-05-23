<?php
require_once("../models/Pret.php");

class PretDAO
{
    private $db;
    private $prets;

    public function __construct($db)
    {
        $this->db = $db;
        $this->prets = [];
    }

    public function allPrets()
    {
        $sql = "SELECT * FROM pret";
        $result = $this->db->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $p = new Pret($row["no_pret"]);
                $p->setNoEmpPr($row["no_emp_pr"]);
                $p->setDateDebut($row["date_debut"]);
                $p->setDateFin($row["date_fin"]);
                $this->prets[] = $p;
            }
        } else {
            echo "0 results";
        }
        $this->db->close();
        return $this->prets;
    }


}