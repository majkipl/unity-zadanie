<?php

namespace Zoo\Classes\Animals;

use Zoo\Classes\Animal;
use Zoo\Strategies\Nutritions\HerbivorousNutrition;

class Elephant extends Animal
{
    /**
     * @var string
     */
    protected string $species = 'Słoń';

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        parent::__construct($name, new HerbivorousNutrition());
    }
}