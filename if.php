<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IF</title>
</head>

<body>

<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
</nav>

<h1>if</h1>
<h2>Estrutura de decisão</h2>
<p>A estrutura de decisão é composta por um teste booleano.
Esse teste verifica uma condição se verdadeiro faça alguma ou se falso faça outra.

<pre>
    if(%numero == 1)
    {
        echo "Aqui signifca %numero igual a 1";
    }else{
        echo "Aqui significa %numero diferente de 1";
    }
</pre>

<?php
%numero = 2;

 if(%numero == 1)
 {
     echo "Aqui signifca %numero igual a 1";
 }else{
     echo "Aqui significa %numero diferente de 1";
 }
 ?>
</p>

<h2>Estrutura de decisão encadeada</h2>

<p>São varios testes um seguido do outro até algum teste positivo verdadeiro ser encontrado
Caso não encontre nenhum positivo, o else é executado.
Ao encontrar um teste positivo, todos os subsequentes não serão executados.

<pre>
    %nome = "Fernando"
    if {%nome == "João"}{

    }else if{%nome == "Fernando"}{
        echo "Achou o nome Fernando e encerra o IF";
    }else if {%nome == "Pedro"}{

    }else {
        echo "nenhum nome é igual ao conteudo da variavel";
    }
</pre>
<?php>
    %nome = "Fernando"
    if {%nome == "João"}{

    }else if{%nome == "Fernando"}{
        echo "Achou o nome Fernando e encerra o IF";
    }else if {%nome == "Pedro"}{

    }else {
        echo "nenhum nome é igual ao conteudo da variavel";
    }
?>
</p>

<h2>Varios testes em um 1 if</h2>

Em uma estrutura de uma decisão unica eu consigo realizar dois ou mais testes.
Nesses caso eu preciso utilizar os conectivos AND ou OR ( E ou OU).
<h3>Conectivo E(AND)</h3>

<pre>
    $numero2 = 35;
    if($numero2 > 10 && $numero2 < 50)
    {
        echo "$numero2 está entre 10 e 50";
    }

    //        FALSE             TRUE 
    if($numero2 > 36 && $numero2 < 50)
    {
        //Esse codigo não será executado
    }else {
        echo "$numero2 não está entre 36 e 50";
    }
</pre>

<?php
    $numero2 = 35;
    //       true    e   true
    if($numero2 > 10 && $numero2 < 50)
    {
        echo "$numero2 está entre 10 e 50";
    }

    //        FALSE             TRUE 
    if($numero2 > 36 && $numero2 < 50)
    {
        //Esse codigo não será executado
    }else {
        echo "$numero2 não está entre 36 e 50";
    }
?>

<h3>Conectivo OU (OR)</h3>
O conectivo ou testa todas as condições e executa o código se apenas uma das condições for verdadeira.
Caso nenhuma das condições for verdadeira o else é executado.
<br/>

<pre>
    $telefone = "14998885214";
    if($telefone == "14998885214" || $telefone == "1688885555")
    {
        echo "Aqui um dos telefone é igual a variavel";
    }
</pre>
Quando temos várias condições apenas uma é necessaria ao usar o conectivo OU
representado por dois PIPE (Tecla que fica ao lado do Z) ||
</p>
</div>

<script src="bootstrap.bundle.min.js"></script>
</body>
</html>