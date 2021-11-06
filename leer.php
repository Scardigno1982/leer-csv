<?php

function leerCSV($archivo){

        $fp = fopen($archivo, 'r');

        $flag = FALSE;

        $encabezado = array();

        $registros = array();


        while ($linea = fgetcsv($fp)) {
            if ($flag === FALSE) {
                $encabezado = $linea;


    //    Normalizo el valor a minuscula
                foreach ($encabezado as $k => $v) {
                    $encabezado[$k] = strtolower($v);
                }

                $flag = TRUE;

                continue;
            }

    // $linea = array_combine($header, $linea);

            $registros[] = array_combine($encabezado, $linea);

        }

        return $registros;

    //    var_dump($registros);

    //    fclose($fp);

    //Lee la primer linea
    //$leer = fgetcsv($fp);
    //var_dump($leer);

}

var_dump(leerCSV('annual-enterprise-survey-2020-financial-year-provisional-csv.csv'));

