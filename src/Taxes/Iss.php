<?php

namespace Src\DesignPattern\Taxes;

use Src\DesignPattern\Budget;

class Iss implements Taxes
{
    private float $iss = 0.06;

    public function calculateTax(Budget $budget): float
    {
        return $budget->value * $this->iss;
    }
}