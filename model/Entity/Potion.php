<?php

namespace Model\Entity;

use App\AbstractEntity;

class Potion extends AbstractEntity {
    //! Propriétés
    private $id;
    private $nomPotion;

    //! Constructeur
    public function __construct($data) {
        parent::hydrate($data, $this);
    }

    //! Méthodes
    //- Getters
    public function getId()
    {
        return $this->id;
    }
    public function getNomPotion()
    {
        return $this->nomPotion;
    }

    //- Setters
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    } 
    public function setNomPotion($nomPotion)
    {
        $this->nomPotion = $nomPotion;
        return $this;
    }

    //- toString
    public function __toString() {
        return $this->getNomPotion();
    }
}