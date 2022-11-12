<?php

echo 'Olá Mundo!<br>';
echo 'Vitória Rodrigues';

/* siginifica comentário de várias linhas

http://http://localhost/viirodrigues/index.php     
*/ 

//siginifica comentário de uma linha 
print ('<h1>escrevendo</h1>');
print_r('<h2>escrevendo de novo</h2>');

$nome = 'vitoria';
$idade = 21;
$altura = 1.67;
$fumante = false;

echo '<br>';
echo $nome.'<br>';
echo $idade.'<br>';
echo $altura.'<br>';
echo $fumante.'<br>';

echo 'Olá ' . $nome . ' você tem ' . $idade . ' anos. ';

echo '<hr>';
echo gettype($nome) .'<br>';
echo gettype($idade) .'<br>';
echo gettype($altura) .'<br>';
echo gettype($fumante) .'<br>'; 
$altura = '1.75';
echo gettype($altura). '<br>'




?>

