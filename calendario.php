<?php

    $data = '2018-01';
    $dia1 = date('w', strtotime($data));
    $dias = date('t',strtotime($data));
    $linhas = ceil(( $dia1+$dias ) / 7);
    $dia1 = -$dia1;
    $data_inicio = date('Y-m-d', strtotime($dia1.' days', strtotime($data)));
    $data_fim = date('Y-m-d', strtotime( ($dia1 + ($linhas * 7) - 1).' days', strtotime($data)));
    echo "Primeiro dia: ".$dia1."<br/>";
    echo "Total dia: ".$dias."<br/>";
    echo "Linhas: ".$linhas."<br/>";
    echo "Data inicio ".$data_inicio."<br/>";
    echo "Data fim ".$data_fim."<br/>";

?>