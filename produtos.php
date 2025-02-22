<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de produtos</title>
    <link rel="stylesheet" href="bootstrap.min.css">

</head>

<body>

    <a href="index.php">Página inicial</a>
    <a href="contato.php">Entre em contato</a>
    <h1>Lista de produtos</a>

    <ol>
    <?php
       for($i = 0; $i < 3; $i++)
       {
         echo "<li>Item $i</li>";
       }
    ?>
    
</body>

</html>