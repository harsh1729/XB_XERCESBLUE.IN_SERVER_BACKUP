<?php
session_start();
include("database_connection.php");

$_SESSION['language'] = $_REQUEST['language'];
echo $_SESSION['language'];
?>