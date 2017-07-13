<?php

namespace Parrot;

class Parrot {

    private $binding = array(
        ParrotTypeEnum::EUROPEAN => EuropeanParrot::class,
        ParrotTypeEnum::AFRICAN => AfricanParrot::class,
        ParrotTypeEnum::NORWEGIAN_BLUE => NorwegianParrot::class,
    );

    private $parrot = null;

    /**
    * Parrot constructor.
    * @param int $type
    * @param int $numberOfCoconuts
    * @param float $voltage
    * @param bool $isNailed
    */
    public function __construct($type, $numberOfCoconuts, $voltage, $isNailed) {
        if (isset($this->binding[$type])) {
            $class = $this->binding[$type];
            $this->parrot = new $class($numberOfCoconuts, $voltage, $isNailed);
        }
    }

    /**
    * @return float
    * @throws \Exception
    */
    public function getSpeed() {
        if ($this->parrot) {
            return $this->parrot->getSpeed();
        }

        throw new \Exception("Should be unreachable");
    }
}