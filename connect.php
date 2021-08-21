<?php

$con=new mysqli('localhost', 'root', '', 'crudoperation');

if (!$con) {
    die(mysqli_errno($con));
}


?>