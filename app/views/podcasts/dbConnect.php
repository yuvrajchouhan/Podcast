<?php

	define('HOST','');
	define('USERNAME','');
	define('PASSWORD','');
	define('DB','');

	$con = mysql_connect(HOST,USERNAME,PASSWORD,DB) or die('Unable to connect');
