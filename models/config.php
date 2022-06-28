<?php

    $server = "sql200.epizy.com";
		$user = "epiz_31121671";
		$pass = "7XhEahxb5zgcPgN";
		$baza = "epiz_31121671_db1";

		$conn = new mysqli ($server, $user, $pass, $baza);

		if ($conn -> connect_error){
			die ("Connection fail" . $conn -> connect_error);
		}


?>
