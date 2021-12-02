<?php

    /**
     * Classe Guitariste créée le 02/12/2021 à 10:16
     * @author Joachim Zadi
     * @version 1.0 du 02/12/2021
     */
    class Guitariste extends Personne implements IMusicien
    {
        public function jouerInstrument(): string
        {
           return "Je joue de la Guitare";
        }
    }