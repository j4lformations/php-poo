<?php

    class Personne
    {
        private $prenom;
        private $age;
        private $conjoint;

        public function __construct(string $prenom, int $age)
        {
            $this->prenom = $prenom;
            $this->age = $age;
        }

        public function setPrenom(string $prenom): void
        {
            $this->prenom = $prenom;
        }

        public function getPrenom(): string
        {
            return $this->prenom;
        }

        public function getAge(): int
        {
            return $this->age;
        }

        public function getConjoint(): Personne
        {
            return $this->conjoint;
        }

        public function seMarier(Personne $personne): void
        {
            if ($this->age >= 18 && $personne->age >= 18 && $this->conjoint == null && $personne->conjoint == null) {
                $this->conjoint = $personne;
                $personne->conjoint = $this; //this ==> represente l'objet courant
            }
        }

        public function __toString(): string
        {
            $affichage = $this->prenom . ", " . $this->age . " ans";
            if ($this->conjoint != null) {
                $affichage.=", a pour conjoint {$this->conjoint->prenom}, {$this->conjoint->age} ans";
            }
            return $affichage;
        }
    }