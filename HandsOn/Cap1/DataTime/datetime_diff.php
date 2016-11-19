<?php

	echo '<pre>';

	$dt1 = new DateTime();
	$dtInterval = new DateInterval('P7D')
	$dt2 = new DateTime('2016-12-10');

	$diferenca = $dt1->diff($dt2);

	print_r($diferenca);
	echo $diferenca->format("%R %d dias"); //R maiusculo acrescenta um sinal de + na saida