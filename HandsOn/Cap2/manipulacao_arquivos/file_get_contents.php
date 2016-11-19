<?php

	file_put_contents('emails.txt',"saopaulo@sp.gov.br\n",FILE_APPEND);
	//echo nl2br($file);

	$file = file_get_contents('emails.txt',"a+");
	echo nl2br($file);