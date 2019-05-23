<?php 
class Materiel {
private $no_mat;
private $nom_materiel;
private $image;
private $categorie;

    public function __construct($no_mat)
    {
        $this->no_mat = $no_mat;
    }

    /**
     * @return mixed
     */
    public function getNomMateriel()
    {
        return $this->nom_materiel;
    }

    /**
     * @param mixed $nom_materiel
     */
    public function setNomMateriel($nom_materiel)
    {
        $this->nom_materiel = $nom_materiel;
    }

    /**
     * @return mixed
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * @param mixed $categorie
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getNoMat()
    {
        return $this->no_mat;
    }

    /**
     * @param mixed $no_mat
     */
    public function setNoMat($no_mat)
    {
        $this->no_mat = $no_mat;
    }

}