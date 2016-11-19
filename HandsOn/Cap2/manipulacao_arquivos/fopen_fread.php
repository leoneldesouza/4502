<?php

	$arq = fopen('emails.txt', 'a+');
	$dados = fread($arq,4096);
	echo nl2br($dados);