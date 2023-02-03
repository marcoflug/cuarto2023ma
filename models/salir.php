<?php
session_start();
session_destroy();
header("location: ../views/interfaces/login.php");
exit();
?>