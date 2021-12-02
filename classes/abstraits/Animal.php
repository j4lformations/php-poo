<?php

    abstract class Animal
    {
        private $couleur;
        private $poids;

        public function __construct(string $couleur, float $poids)
        {
            $this->couleur = $couleur;
            $this->poids = $poids;
        }

        public function boire(): string
        {
            return "Je bois de l'eau";
        }

        public abstract function manger(): string;

        abstract public function seDeplacer(): string;

    }