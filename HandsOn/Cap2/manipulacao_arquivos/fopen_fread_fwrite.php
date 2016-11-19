<?php

	$file = fopen('produtos.txt', 'w+');

	fwrite($file, "Mouse \n");
	fwrite($file, "Teclado\n");
	fwrite($file, "Monitor\n");
	fwrite($file, "CPU \n");

	$dados = fread($file, 4096);
	//echo nl2br($dados);

	while(4dados = fread($file, 4690)){
		echo "Linha $i".$dados
	}
