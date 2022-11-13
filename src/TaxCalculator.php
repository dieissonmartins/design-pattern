<?php
declare(strict_types=1);

namespace Src\DesignPattern;

class TaxCalculator
{
    private float $icms = 0.1;
    private float $iss = 0.06;

    public const ICMS = 'ICMS';
    public const ISS = 'ISS';

    public function calculate(Budget $budget, string $name_tax): void
    {
        $aux = 0.00;

        switch ($name_tax) {
            case self::ICMS:
                $aux = $budget->value * $this->icms;
                break;
            case self::ISS:
                $aux = $budget->value * $this->iss;
                break;
        }

        $this->printBudget($aux, $name_tax);
    }

    public function printBudget(float $value, string $name_tax): void
    {
        echo "{$name_tax}: $value  </br>";
    }
}