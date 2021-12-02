<?php

    /**
     * Classe Batteur créée le 02/12/2021 à 10:09
     * @author Joachim Zadi
     * @version 1.0 du 02/12/2021
     */
    class Batteur extends Personne implements IMusicien
    {
        public function jouerInstrument(): string
        {
            return "Je joue de la batterie";
        }
    }