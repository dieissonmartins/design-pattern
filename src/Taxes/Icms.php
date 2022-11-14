<?php

namespace Src\DesignPattern\Taxes;

use Src\DesignPattern\Budget;

class Icms implements Taxes
{
    private float $icms = 0.1;

    public function calculateTax(Budget $budget): float
    {
        return $budget->value * $this->icms;
    }
}