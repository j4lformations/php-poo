<?php

    class Personne
    {
        private string $prenom;
        private int $age;
        private Personne $conjoint;

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

        public function seMarier(Personne $p):void{

        }
    }