<?php

class Animal
{
    private string $family  ;
    private string $food   ;

    public function __construct( $family, $food)
    {
        $this->family = $family;
        $this->food = $food;
    }

    public function getFamily() : int
    {
        return $this->family;
    }

    public function getFood()
    {
        return $this->food;
    }

    public function setFamily($family): void
    {
        $this->family = $family;
}
    public function setFood($food): void
    {
        $this->food = $food;
    }
}
?>