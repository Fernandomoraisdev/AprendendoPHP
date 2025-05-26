<?php
$grausCelsius = 40;

function celsiusToFahrenheit(float $celsius): float
{
    return ($celsius * 9/5) + 32;
}
echo celsiusToFahrenheit($grausCelsius);