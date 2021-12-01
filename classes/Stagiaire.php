<?php

    class Stagiaire extends Personne // On dit que la classe Stagiaire herite de la classe Personne
    {
        private $formation;

        public function __construct(string $prenom, int $age, string $formation)
        {
            parent::__construct($prenom, $age);
            $this->formation = $formation;
        }

        public function fonctionEnfant(): void
        {
            parent::autreMethode();
        }

        public function __toString(): string
        {
            return parent::__toString() . "<br/>Et suit la formation " . $this->formation;
        }
    }