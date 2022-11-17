<?php
namespace Src\DesignPattern\Discounts;

use Src\DesignPattern\Budget;

abstract class Discount
{
    protected ?Discount $next_discount;

    public function __construct(?Discount $next_discount)
    {
        $this->next_discount = $next_discount;
    }

    abstract public function calculate(Budget $budget): float;
}