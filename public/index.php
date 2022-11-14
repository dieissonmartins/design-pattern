<?php

use Src\DesignPattern\Budget;
use Src\DesignPattern\TaxCalculator;
use Src\DesignPattern\Taxes\Icms;

require_once __DIR__ . '/../vendor/autoload.php';

$calculator = new TaxCalculator();

$budget = new Budget();
$budget->value = 100;

$tax = new Icms();

$calculator->calculate($budget, $tax);

$calculator->calculate($budget, $tax);