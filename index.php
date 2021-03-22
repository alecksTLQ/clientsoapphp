<?php

try {
    

    $cliente = new SoapClient('http://localhost:54430/Service1.svc?singleWsdl');

    //utilizar metodo 

    $resultadoPago = $cliente->procesarPago([
        "total" => 1000,
        "pago" =>100
    ]);

    $array = json_decode(json_encode($resultadoPago), true);

    //print_r($array);

    if($array["procesarPagoResult"]>=0){
        echo "pago realizado";
    }else{
        echo "dinero insuficiente";
    }

} catch (Exception $e) {
    echo $e->getMessage();
}

?>