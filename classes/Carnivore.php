<?php

    abstract class Carnivore extends Animal
    {
        public function manger(): string
        {
            return "Je mange de la viande";
        }
    }