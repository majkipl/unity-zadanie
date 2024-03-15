<?php

namespace Zoo\Strategies\Nutritions ;

use Zoo\Interfaces\NutritionInterface;

class OmnivorousNutrition implements NutritionInterface
{
    /**
     * @param string $name
     * @return void
     */
    public function feeding(string $name): void
    {
        echo $name . ' je mięso i rośliny.' . PHP_EOL;
    }
}