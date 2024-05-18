<?php

namespace PizzaStore;

class PizzaStore
{
    public function orderPizza(string $type): void
    {
        $pizza = $this->createPizza($type);
        $pizza->prepare();
        $pizza->cut();
    }
    public function createPizza(string $type): Pizza
    {
        return new Pizza('','',[]);
    }
}