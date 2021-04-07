<?php

$mysqli = new mysqli("localhost", "root", "", "electrodr");

if(mysqli_connect_errno()){

	echo "problemas con la base de datos";
}