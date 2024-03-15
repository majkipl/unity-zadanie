<?php

namespace Zoo\Classes\Animals;

use Zoo\Classes\Animal;
use Zoo\Interfaces\FurryInterface;
use Zoo\Strategies\Nutritions\CarnivorousNutrition;

class SnowLeopard extends Animal implements FurryInterface
{
    /**
     * @var string
     */
    protected string $species = 'Irbis śnieżny';

    /**
     * @param string $name
     */
    public function __construct(string $name) {
        parent::__construct($name, new CarnivorousNutrition());
    }

    /**
     * @return void
     */
    public function combing(): void
    {
        echo $this->name . ' cieszy się swoim futrem.' . PHP_EOL;
    }
}