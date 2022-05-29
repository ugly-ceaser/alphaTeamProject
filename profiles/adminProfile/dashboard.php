
<?php
session_start();

if(!isset($_SESSION['id'])) header("Location: ./index.php");

echo $_SESSION['id'];