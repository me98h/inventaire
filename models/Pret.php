<?php
class Pret {
    private $no_mat_pr;
    private $no_emp_pr;
    private $date_debut;
    private $date_prevu;
    private $date_fin;
    private $statut;

    public function __construct($no_mat_pr)
    {
        $this->no_mat_pr = $no_mat_pr;

    }

    /**
     * @return mixed
     */
    public function getNoMatPr()
    {
        return $this->no_mat_pr;
    }

    /**
     * @param mixed $no_mat_pr
     */
    public function setNoMatPr($no_mat_pr)
    {
        $this->no_mat_pr = $no_mat_pr;
    }

    /**
     * @return mixed
     */
    public function getNoEmpPr()
    {
        return $this->no_emp_pr;
    }

    /**
     * @param mixed $no_emp_pr
     */
    public function setNoEmpPr($no_emp_pr)
    {
        $this->no_emp_pr = $no_emp_pr;
    }

    /**
     * @return mixed
     */
    public function getDateDebut()
    {
        return $this->date_debut;
    }

    /**
     * @param mixed $date_debut
     */
    public function setDateDebut($date_debut)
    {
        $this->date_debut = $date_debut;
    }

    /**
     * @return mixed
     */
    public function getDatePrevu()
    {
        return $this->date_prevu;
    }

    /**
     * @param mixed $date_prevu
     */
    public function setDatePrevu($date_prevu)
    {
        $this->date_prevu = $date_prevu;
    }

    /**
     * @return mixed
     */
    public function getDateFin()
    {
        return $this->date_fin;
    }

    /**
     * @param mixed $date_fin
     */
    public function setDateFin($date_fin)
    {
        $this->date_fin = $date_fin;
    }

    /**
     * @return mixed
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * @param mixed $statut
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;
    }


}