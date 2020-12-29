<?php

namespace Model\Entity;

use App\AbstractEntity;

class Lieu extends AbstractEntity {
    //! Propriétés
    private $id;
    private $nomLieu;

    //! Constructeur
    public function __construct($data) {
        parent::hydrate($data, $this);
    }

    //! Méthodes
    //- Getters
    public function getId() {
        return $this->id;
    }
    public function getNomLieu() {
        return $this->nomLieu;
    }

    //- Setters
    public function setId($id) {
        $this->id = $id;
        return $this;
    }
    public function setNomLieu($nomLieu) {
        $this->nomLieu = $nomLieu;
        return $this;
    }

    //- toString
    public function __toString() {
        return $this->getNomLieu();
    }
}
