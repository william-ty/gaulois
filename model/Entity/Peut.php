<?php

namespace Model\Entity;

use App\AbstractEntity;

class Peut extends AbstractEntity {
    //! Propriétés
    private $potion;
    private $villageois;
    private $aLeDroit;

    //! Constructeur
    public function __construct($data) {
        parent::hydrate($data, $this);
    }

    //! Méthodes
    //- Getters
    public function getPotion() {
        return $this->potion;
    }
    public function getVillageois() {
        return $this->villageois;
    }
    public function getALeDroit() {
        return $this->aLeDroit;
    }

    //- Setters
    public function setPotion($potion) {
        $this->potion = $potion;
        return $this;
    }
    public function setVillageois($villageois) {
        $this->villageois = $villageois;
        return $this;
    }
    public function setALeDroit($aLeDroit) {
        $this->aLeDroit = $aLeDroit;
        return $this;
    }
}
