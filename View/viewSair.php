<?php
session_start();
session_destroy();
header("Location: viewLogin.php");
exit;
?>