<?php

namespace Model\Entity;

use App\AbstractEntity;

class Bataille extends AbstractEntity {
    //! Propriétés
    private $id;
    private $lieu;
    private $nomBataille;
    private $dateBataille;

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
    public function getNomBataille() {
        return $this->nomBataille;
    }
    public function getDateBataille() {
        return $this->dateBataille->format("d/m/Y");
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
    public function setNomBataille($nomBataille) {
        $this->nomBataille = $nomBataille;
        return $this;
    }
    public function setDateBataille($dateBataille) {
        $this->dateBataille = new \DateTime($dateBataille);
        return $this;
    }

    //! toString
    public function __toString() {
        return $this->getNomBataille();
    }
}
