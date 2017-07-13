<?php

namespace Parrot;

class NorwegianParrot extends AbstractParrot {

    public function getSpeed() {
        return $this->isNailed ? 0 : $this->getBaseSpeedWith($this->voltage);
    }

    private function getBaseSpeedWith($voltage) {
        return min(24.0, $voltage * $this->getBaseSpeed());
    }
}