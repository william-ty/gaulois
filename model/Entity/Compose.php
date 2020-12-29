<?php

namespace Model\Entity;

use App\AbstractEntity;

class Compose extends AbstractEntity {
    //! Propriétés
    private $potion;
    private $ingredient;
    private $qte;

    //! Constructeur
    public function __construct($data) {
        parent::hydrate($data, $this);
    }

    //! Méthodes
    //- Getters
    public function getPotion() {
        return $this->potion;
    }
    public function getIngredient() {
        return $this->ingredient;
    }
    public function getQte() {
        return $this->qte;
    }

    //- Setters
    public function setPotion($potion) {
        $this->potion = $potion;
        return $this;
    }
    public function setIngredient($ingredient) {
        $this->ingredient = $ingredient;
        return $this;
    }
    public function setQte($qte) {
        $this->qte = $qte;
        return $this;
    }
}
