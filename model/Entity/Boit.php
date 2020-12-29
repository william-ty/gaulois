<?php

namespace Model\Entity;

use App\AbstractEntity;

class Boit extends AbstractEntity {
    //! Propriétés
    private $potion;
    private $villageois;
    private $dateBu;
    private $dose;

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
    public function getDateBu() {
        return $this->dateBu->format("d/m/Y");
    }
    public function getDose() {
        return $this->dose;
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
    public function setDateBu($dateBu) {
        $this->dateBu = new \DateTime($dateBu);
        return $this;
    }
    public function setDose($dose) {
        $this->dose = $dose;
        return $this;
    }
}
