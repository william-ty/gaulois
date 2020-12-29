<?php

namespace Model\Entity;

use App\AbstractEntity;

class Ingredient extends AbstractEntity {
    //! Propriétés
    private $id;
    private $nomIngredient;
    private $coutIngredient;

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
    public function getNomIngredient()
    {
        return $this->nomIngredient;
    }
    public function getCoutIngredient()
    {
        return $this->coutIngredient;
    }

    //- Setters
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }   
    public function setNomIngredient($nomIngredient)
    {
        $this->nomIngredient = $nomIngredient;
        return $this;
    }
    public function setCoutIngredient($coutIngredient)
    {
        $this->coutIngredient = $coutIngredient;
        return $this;
    }

    //- toString
    public function __toString() {
        return $this->getNomIngredient();
    }
}