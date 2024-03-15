<?php

namespace Zoo\Strategies\Nutritions ;

use Zoo\Interfaces\NutritionInterface;

class HerbivorousNutrition implements NutritionInterface
{
    /**
     * @param string $name
     * @return void
     */
    public function feeding(string $name): void
    {
        echo $name . ' je rośliny.' . PHP_EOL;
    }
}