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

    }else if {%nome == "Pedro"}{

    }else {
        echo "nenhum nome é igual ao conteudo da variavel";
    }
</pre>
</p>
</div>

<script src="bootstrap.bundle.min.js"></script>
</body>
</html>