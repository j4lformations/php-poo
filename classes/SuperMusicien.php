<?php

    /**
     * Classe SuperMusicien créée le 02/12/2021 à 10:21
     * @author Joachim Zadi
     * @version 1.0 du 02/12/2021
     */
    class SuperMusicien extends Personne implements /*IMusicien, ICompositeur*/ ISuperMusicien
    {
        public function jouerInstrument(): string
        {
            return "Je joue plusieurs instruments dont le Piano";
        }

        public function ecrirePartition(): string
        {
            return "Je fournis des partitions à Goldman";
        }
    }