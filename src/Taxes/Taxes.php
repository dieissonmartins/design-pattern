<?php

namespace Src\DesignPattern\Taxes;

use Src\DesignPattern\Budget;

interface Taxes
{
    public function calculateTax(Budget $budget): float;
}