<?php

    /**
     * Classe personne permettant de creer les objet de type Personne
     * @author DWWM
     */
    class Personne
    {
        // Attributs d'instance
        private $prenom;
        private $age;
        private $conjoint;

        // Attribut de classe
        private static $compteur;

        public function __construct(string $prenom, int $age)
        {
            $this->prenom = $prenom;
            $this->age = $age;
            self::$compteur++;
        }

        protected function autreMethode(): void
        {

        }

        // Methode d'instance
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

        public static function getCompteur()
        {
            return self::$compteur;
        }

        /**
         * Permert d'effectuer le mariage de l'objet en cours avec l'objet passee en parametre
         * @param Personne $personne , le futur conjoint eventuel de l'objet en cours
         */
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
                $affichage .= ", a pour conjoint {$this->conjoint->prenom}, {$this->conjoint->age} ans";
            }
            return $affichage;
        }
    }