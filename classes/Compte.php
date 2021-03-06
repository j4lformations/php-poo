<?php

    /**
     * Classe Compte permettant de representer un objet de type Compte
     *
     * @author Joachim Zadi
     */
    class Compte
    {
        //Les attributs de la classes generalement encapsuler
        private $numero;
        private $solde;

        // LE CONSTRUCTEUR
        public function __construct(string $numero, float $solde)
        {
            $this->numero = $numero;
            $this->solde = $solde;
        }

        //SETTERS OU ACCES EN ECRITURE
        public function setNumero(string $numero): void
        {
            $this->numero = $numero;
        }

        public function setSolde(float $solde): void
        {
            $this->solde = $solde;
        }

        //GETTERS OU ACCES EN LECTURE
        public function getNumero(): string
        {
            return $this->numero;
        }

        public function getSolde(): float
        {
            return $this->solde;
        }

        public function deposer(float $montant): void
        {
            if ($montant > 0) {
                // $this->solde = $this->solde + $montant;
                $this->solde += $montant;
            }
        }

        public function retirer(float $montant): void
        {
            if ($montant > 0) {
                $this->solde -= $montant;
            }
        }

        // Permet de representer textuellement l'instance en cours
        public function __toString(): string
        {
            return "Compte[" . $this->numero . ", " . $this->solde . "€]";
        }
    }