<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
        //funções para manipular datas

        /*

        date(formato) -> recupera data atual

        date_default_time_get(timezone) -> recupera timezone default da aplicação

        date_default_time_set(timezone) -> atualiza timezone default da aplicação
        
        strtotime(data) -> transforma datas textuais em segundos
        
        */

        //recuperação da data atual
        /* 
        echo date('d/m/y H:i');

        //
        echo '<br />';
        echo date_default_timezone_get();
        echo date_default_timezone_set('America/Sao_Paulo');
        echo '<br />';
        echo date('d/m/y H:i'); 
        */

        $data_inicial = '2022-04-24';
        $data_final = '2022-05-15';
    
        //timestamp
        //01/01/1970 -- 2022-04-24 (js -> milissegundos / php -> segundos)

        $time_inicial = strtotime($data_inicial);
        $time_final = strtotime($data_final);

        echo $data_inicial . ' - ' . $time_inicial;
        echo '<br />';
        echo $data_final . ' - ' . $time_final;

        //diferença em segundos de uma data e outra
        $diferenca_times = $time_final - $time_inicial;

        echo '<br />';
        echo 'a diferença de segundo entre a data inicial e a final é de: ' . $diferenca_times;

        $segundos_existem_dia = 24 * 60 * 60;

        echo '<br />';
        echo 'um dia possui ' . $segundos_existem_dia . 'segundos';

        $diferença_de_dias_entre_as_datas = $diferenca_times / $segundos_existem_dia;

        echo '<br />';
        echo 'a diferença em dias é: ' . $diferença_de_dias_entre_as_datas;
    
    
    ?>
</body>
</html>