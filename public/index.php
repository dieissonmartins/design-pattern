<?php

use Src\DesignPattern\Budget;
use Src\DesignPattern\DiscountCalculator;
use Src\DesignPattern\TaxCalculator;
use Src\DesignPattern\Taxes\Icms;

require_once __DIR__ . '/../vendor/autoload.php';

/*
$calculator = new TaxCalculator();

$budget = new Budget();
$budget->value = 100;

$tax = new Icms();

$calculator->calculate($budget, $tax);

$calculator->calculate($budget, $tax);
*/

$budget = new Budget();
$budget->value = 500;
$budget->items_qtd = 7;

$calculator = new DiscountCalculator();
echo $calculator->calculate($budget);