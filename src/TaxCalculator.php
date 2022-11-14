<?php
declare(strict_types=1);

namespace Src\DesignPattern;

use Src\DesignPattern\Taxes\Taxes;

class TaxCalculator
{
    public function calculate(Budget $budget, Taxes $tax): float
    {
        return $tax->calculateTax($budget);
    }
}