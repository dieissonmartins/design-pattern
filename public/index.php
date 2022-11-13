<?php

use Src\DesignPattern\Budget;
use Src\DesignPattern\TaxCalculator;

require_once __DIR__ . '/../vendor/autoload.php';

$calculator = new TaxCalculator();

$budget = new Budget();
$budget->value = 100;

$calculator->calculate($budget, TaxCalculator::ISS);

$calculator->calculate($budget, TaxCalculator::ICMS);