<?php

/* echo 'Este es un texto de una línea
esta es otra línea
$nombre'; */

$nombre = 'Moises';

//echo 'Mi nombre es ' . $nombre;
//echo "Mi nobre es $nombre";

// Estructura compleja ARRAY
$cursos = array(
    [ 
        'backend' => 'Php',
        'frontend' => 'Livewire'
    ],
    [ 
        'backend' => 'NodeJS',
        'frontend' => 'React'
    ],
    [ 
        'backend' => 'Express',
        'frontend' => 'Angular'
    ],
);

// formato JSON
//echo json_encode($cursos);

//echo "Yo quiero aprende {$cursos[2]['frontend']}";

// Estructura compleja ARRAY
$lenguajes = [
    'backend' => [
        'PHP', 
        'Python',
        'Java',
        'NodeJS',
    ]
];

//echo json_encode($lenguajes);
echo "Estoy aprendiendo {$lenguajes['backend'][3]}";