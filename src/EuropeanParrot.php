<?php

namespace Parrot;

class EuropeanParrot extends AbstractParrot {
    
    public function getSpeed() {
        return $this->getBaseSpeed();
    }
}