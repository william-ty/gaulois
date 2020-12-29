<?php

namespace Model\Entity;

use App\AbstractEntity;

class Villageois extends AbstractEntity {
    //! Propriétés
    private $id;
    private $lieu;
    private $specialite;
    private $nom;
    private $adresse;
    private $image;

    //! Constructeur
    public function __construct($data) {
        parent::hydrate($data, $this);
    }

    //! Méthodes
    //- Getters
    public function getId() {
        return $this->id;
    }
    public function getLieu() {
        return $this->lieu;
    }
    public function getSpecialite() {
        return $this->specialite;
    }
    public function getNom() {
        return $this->nom;
    }
    public function getAdresse() {
        return $this->adresse;
    }
    public function getImage() {
        return $this->image;
    }

    //- Setters
    public function setId($id) {
        $this->id = $id;
        return $this;
    }
    public function setLieu($lieu) {
        $this->lieu = $lieu;
        return $this;
    }
    public function setSpecialite($specialite) {
        $this->specialite = $specialite;
        return $this;
    }
    public function setNom($nom) {
        $this->nom = $nom;
        return $this;
    }
    public function setAdresse($adresse) {
        $this->adresse = $adresse;
        return $this;
    }
    public function setImage($image) {
        $this->image = $image;
        return $this;
    }

    //! toString
    public function __toString() {
        return $this->getNom();
    }
}
