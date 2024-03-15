<?php

namespace Zoo\Strategies\Nutritions ;

use Zoo\Interfaces\NutritionInterface;

class CarnivorousNutrition implements NutritionInterface
{
    /**
     * @param string $name
     * @return void
     */
    public function feeding(string $name): void
    {
        echo $name . ' je mięso.' . PHP_EOL;
    }
}