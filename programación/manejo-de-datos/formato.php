<?php

$texto = 'yo soy estudiante de Quinto Computación';

echo '<pre>';
// Convertir a Minusculos
echo strtolower($texto);

echo '<br>';

// Convertir a Mayúsculas
echo mb_strtoupper($texto); // monobyte
// mb_ permite formatear los datos a multibyte

echo '<br>';

// Convierte la primera letra en mayuscula
echo ucfirst($texto);

echo '<br>';

// Convierte la primera letra en minuscula
echo lcfirst($texto);

echo '<br><br><br>';

$nit = '5679856-2';
$nit_formateado = str_replace('-', '', $nit);
echo $nit_formateado;

$cliente = 'CF';
$cliente_formateado = str_replace('-', '/', $cliente);
echo $cliente_formateado;

echo '<br><br>';

$ciudad = 'mAzAtEnAnGo';
echo ucfirst(strtolower($ciudad));

echo '<br><br>';

$codigo = '3229';
echo '<br>';
echo str_pad($codigo, 8, '0');
echo '<br>';
echo str_pad($codigo, 8, '0', STR_PAD_BOTH);
echo '<br>';
echo str_pad($codigo, 8, '0', STR_PAD_LEFT);
echo '<br>';
echo str_pad($codigo, 8, '0', STR_PAD_RIGHT);

