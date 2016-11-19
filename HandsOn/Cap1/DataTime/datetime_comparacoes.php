<?php

	$dt1 = new DateTime();

	$dt2 = new DateTime('2016-12-10');

	 print_r($dt1);
	 print_r($dt2);

	 if($dt1 > $dt2){
	 	echo 'Boleto vencido';
	 }

	 if($dt1 <= $dt2){
	 	echo 'Boleto valido';
	 }

	 if($dt1 == $dt2){
	 	echo 'datas iguais';
	 }