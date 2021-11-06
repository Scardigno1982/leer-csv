<?php

$personas = Array(
                    Array(
                        'Nombre' , 'Apellido'
                    ),
                    Array('Sergio', 'Scardigno'),Array('Sergio', 'Scardigno'),Array('Sergio', 'Scardigno'),Array('Sergio', 'Scardigno'),
                    Array('Maria', 'Nario')

);

$fp = fopen('datos.csv','w');

foreach ($personas as $persona){
    fputcsv($fp, $persona);
}

fclose($fp);

$fp = fopen('datos.csv','r');

while ($linea = fgetcsv($fp)){
    var_dump($linea);
}

fclose($fp);
