<?php

namespace Model\Entity;

use App\AbstractEntity;

class PriseCasque extends AbstractEntity {
    //! Propriétés
    private $casque;
    private $villageois;
    private $bataille;
    private $qte;

    //! Constructeur
    public function __construct($data) {
        parent::hydrate($data, $this);
    }

    //! Méthodes
    //- Getters
    public function getCasque() {
        return $this->casque;
    }
    public function getVillageois() {
        return $this->villageois;
    }
    public function getBataille() {
        return $this->bataille;
    }
    public function getQte() {
        return $this->qte;
    }

    //- Setters
    public function setCasque($casque) {
        $this->casque = $casque;
        return $this;
    }
    public function setVillageois($villageois) {
        $this->villageois = $villageois;
        return $this;
    }
    public function setBataille($bataille) {
        $this->bataille = $bataille;
        return $this;
    }
    public function setQte($qte) {
        $this->qte = $qte;
        return $this;
    }
}
