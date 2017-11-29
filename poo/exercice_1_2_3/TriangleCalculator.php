<?php

namespace POO;

class TriangleCalculator {

    public function sommePerimetre(Triangle $triangle1, Triangle $triangle2){
        return $triangle1->getPerimetre() + $triangle2->getPerimetre();
    }

    public function sommeAir(Triangle $triangle1, Triangle $triangle2){
        return $triangle1->getAir() + $triangle2->getAir();
    }
}