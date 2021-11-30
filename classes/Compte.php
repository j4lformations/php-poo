<?php

    /**
     * Creation du type Compte
     */
    class Compte
    {
        //Les attributs de la classes
        // On parle d'encapsulation des attributs
        private string $numero;
        private float $solde;

        // LE CONSTRUCTEUR
        public function __construct(string $numero, float $solde)
        {
            $this->numero = $numero;
            $this->solde = $solde;
        }

        //SETTERS OU MODIFICATEURS OU ACCES EN ECRITURE
//        public function setNumero(string $numero): void
//        {
//            $this->numero = $numero;
//        }
//
//        public function setSolde(float $solde): void
//        {
//            $this->solde = $solde;
//        }

        //GETTERS OU ACCES EN LECTURE
        public function getNumero(): string
        {
            return $this->numero;
        }

        public function getSolde(): float|int
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

        // Permet d'afficher les sous forme de chaine de caracteres
        public function __toString(): string
        {
            return "Compte[" . $this->numero . ", " . $this->solde . "€]";
        }
    }