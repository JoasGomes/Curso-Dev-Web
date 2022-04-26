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
    
        //estruturas de repetição


        //while


        $num = 1;
        //operadores de comparação / lógicos
        /* echo '-- inicio do loop --';
        while($num < 1000){
            echo "$num <br/>";

            $num += 5; //critério de parada

            if($num > 100){
                break;
            }
        }
        echo '-- fim do loop --'; */


        echo '-- inicio do loop --';
        while($num < 10){

            $num ++; //critério de parada

            if($num ==2 || $num == 6){
                continue;
            }

            echo "$num <br/>";
        }
        echo '-- fim do loop --';
    

        //do while


        $x = 1;

        do {
            echo "X = $x";

            $x++; //criterio de parada

            //continue
            //break

        } while($x < 9);


        //for


        for($z = 1; $z <= 10; $z++){
            echo "$z <br/>";
        }
    
    
    ?>
</body>
</html>