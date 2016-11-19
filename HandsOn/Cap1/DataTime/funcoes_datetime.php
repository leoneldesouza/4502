<?php

	echo date('d/m/y');
	echo '<br />';
	echo date('d-m-y');
	echo '<br />';
	echo date('d');
	echo '<br />';
	echo date('m');
	echo '<br />';
	echo date('y');
	echo '<br />';
	
	echo time();
	echo '<br />';
	echo microtime();
	echo '<br />';

	echo $proximaSemana = time() + (7*24*60*60);
	echo '<br />';
	echo date('d-m-y', $proximaSemana);
