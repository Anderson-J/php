<?php

 $idade = 32;
 $salario = 3000.10;
 $divisao = 10 / 3;
 $texto = "Um texto qualquer";
 $verdadeiro = true;
 $falso = false;

 echo gettype($divisao); // retorno double

 $divisao = 3;

 echo gettype($divisao); // retorno integer devido a tipagem dinâmica

 echo gettype($idade);
 echo gettype($salario);
 echo gettype($texto);
 echo gettype($verdadeiro);
 echo gettype($falso);