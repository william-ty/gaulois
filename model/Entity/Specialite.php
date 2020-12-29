<?php

namespace Model\Entity;

use App\AbstractEntity;

class Specialite extends AbstractEntity {
    //! Propriétés
    private $id;
    private $nomSpecialite;

    //! Constructeur
    public function __construct($data) {
        parent::hydrate($data, $this);
    }

    //! Méthodes
    //- Getters
    public function getId() {
        return $this->id;
    }
    public function getNomSpecialite() {
        return $this->nomSpecialite;
    }

    //- Setters
    public function setId($id) {
        $this->id = $id;
        return $this;
    }
    public function setNomSpecialite($nomSpecialite) {
        $this->nomSpecialite = $nomSpecialite;
        return $this;
    }

    //- toString
    public function __toString() {
        return $this->getNomSpecialite();
    }
}
