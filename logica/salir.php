<?php
session_start();
session_destroy();
header("location: ../Iniciada.php");
exit();
?>