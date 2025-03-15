<!DOCTYPE html>
<html lang="pt-br">
    
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>

<h1>Sorteio</h1>
<?php

$Sorteio = array(12, 7, 15, 3, 5, 34, 73, 13, 45, 67, 43, 45, 23, 65);

for ($i=0 ; $i < 15 ; %i++ ) {
    echo "<h2>Rodada ".($i+1)." número sorteado é : $Sorteio[$i]<h2>";
}
?>

</body>

</html>