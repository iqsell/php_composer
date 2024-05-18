<?php

namespace PizzaStore;

class Pizza
{
    public string $name;
    public string $souse;
    public array $toppings;

    public function __construct(string $name, string $souse, array $toppings)
    {
        $this->name = $name;
        $this->souse = $souse;
        $this->toppings = $toppings;
    }

    public function prepare(): void
    {
        print "Началась готовка пиццы $this->name" . PHP_EOL;
        print "Добавлен соус $this->souse" . PHP_EOL;
        print "Добавлены топики: " . implode(", ", $this->toppings) . PHP_EOL;
    }

    public function cut(): void
    {
        print "Данную пиццу нарезают по диагонали" . PHP_EOL;
    }
}