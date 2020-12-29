<?php

namespace Model\Entity;

use App\AbstractEntity;

class Casque extends AbstractEntity {
    //! Propriétés
    private $id;
    private $typeCasque;
    private $nomCasque;
    private $coutCasque;

    //! Constructeur
    public function __construct($data) {
        parent::hydrate($data, $this);
    }

    //! Méthodes
    //- Getters
    public function getId() {
        return $this->id;
    }
    public function getTypeCasque() {
        return $this->typeCasque;
    }
    public function getNomCasque() {
        return $this->nomCasque;
    }
    public function getCoutCasque() {
        return $this->coutCasque;
    }

    //- Setters
    public function setId($id) {
        $this->id = $id;
        return $this;
    }
    public function setTypeCasque($typeCasque) {
        $this->typeCasque = $typeCasque;
        return $this;
    }
    public function setNomCasque($nomCasque) {
        $this->nomCasque = $nomCasque;
        return $this;
    }
    public function setCoutCasque($coutCasque) {
        $this->coutCasque = $coutCasque;
        return $this;
    }

    //- toString
    public function __toString() {
        return $this->getNomCasque();
    }
}
