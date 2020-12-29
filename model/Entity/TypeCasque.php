<?php

namespace Model\Entity;

use App\AbstractEntity;

class TypeCasque extends AbstractEntity {
    //! Propriétés
    private $id;
    private $nomTypeCasque;

    //! Constructeur
    public function __construct($data) {
        parent::hydrate($data, $this);
    }

    //! Méthodes
    //- Getters
    public function getId() {
        return $this->id;
    }
    public function getNomTypeCasque() {
        return $this->nomTypeCasque;
    }

    //- Setters
    public function setId($id) {
        $this->id = $id;
        return $this;
    }
    public function setNomTypeCasque($nomTypeCasque) {
        $this->nomTypeCasque = $nomTypeCasque;
        return $this;
    }

    //- toString
    public function __toString() {
        return $this->getNomTypeCasque();
    }
}
