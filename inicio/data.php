<?php 
    echo "hoje é dia " . date('d/m/Y'); // data("D/M/Y) fica Thu/Apr/2019
    echo " agora sao " . date('H:i:s');
    echo "<br>";
    echo " horas no formato de am pm " . date('a:i:s');
    echo "<br>";
    echo "O dia da semana é: " . date('l');
    echo "<br>";
    echo "Hoje é o dia de numero (\"" . date('z') . "\") indo de 0 ate 365";
    echo "<br>";
    echo "O dia da semana é: " . date('F');
    echo "<br>";
    
    $diasemana = array('Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabado');

    $data = date('Y-m-d');

    $diasemana_numero = date('w', strtotime($data));

    echo $diasemana[$diasemana_numero];

?>