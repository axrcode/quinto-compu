<?php

$informacion = 'E568545';
//echo $informacion[0];

/* OBTENER SUBCADENAS */
$post = 'Lorem ipsum dolor sit amet, 
consectetur adipisicing elit. At impedit 
deleniti adipisci quos itaque illo! 
Recusandae aspernatur dignissimos doloremque 
nam in officiis quas. Beatae exercitationem 
odit corporis ab itaque voluptate!';

$subpost = substr($post, 0, 25);

//echo "<p class='subpost'>$subpost... <a href>ver más</a></p>";

$fecha =    '14/11/1997';
//          '13/05/2004'; 

//  substr( $variable, posicion_inicial, cantidad_a_mostrar );
$dia = substr($fecha, 0, 2);
$mes = substr($fecha, 3, 2);
$anio = substr($fecha, 6, 4);

//echo "Yo nací el $dia del $mes del $anio";

/* CONVERTIR UN STRING A UN ARRAY */

$datos = 'admin, usuario, empleado, contador';
$nombres = explode(', ', $datos);

//echo json_encode($nombres);
//echo '<pre>';
//var_dump($nombres);

/* CONVERTIR UN ARRAY A STRING */

$cursos = [
    'javascript',
    'php',
    'python'
];
$cadena = implode(', ', $cursos);
//echo $cadena;

$nombre = '       Axel Roberto Castillo     ';
$nombre = trim($nombre);
//echo '<pre>';
//echo "Mi nombre es $nombre, soy de Mazate";