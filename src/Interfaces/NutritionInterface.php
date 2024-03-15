<?php

namespace Zoo\Interfaces;

interface NutritionInterface
{
    /**
     * @param string $name
     * @return void
     */
    public function feeding(string $name): void;
}