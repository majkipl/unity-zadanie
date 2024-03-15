<?php

namespace Zoo\Classes;

use Zoo\Interfaces\NutritionInterface;

abstract class Animal
{
    /**
     * @var string
     */
    protected string $species;

    /**
     * @param string $name
     * @param NutritionInterface $nutritionStrategy
     */
    public function __construct(protected string $name, protected NutritionInterface $nutritionStrategy)
    {
    }

    /**
     * @return string
     */
    public function __toString() {
        return $this->species . ' ' . $this->name;
    }

    /**
     * @return void
     */
    public function feeding() {
        $this->nutritionStrategy->feeding($this->name);
    }
}