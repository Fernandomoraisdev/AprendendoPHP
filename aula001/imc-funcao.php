<?php
$alturaEmMetros = 1.80;
$pesoEmQuilos = 80;
function calcularImc(float $alturaEmMetros, float $pesoEmQuilos): float
{
    return $pesoEmQuilos /$alturaEmMetros ** 2;
}

echo calcularImc($alturaEmMetros,$pesoEmQuilos);