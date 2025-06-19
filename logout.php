<?php
session_start();
session_destroy();
header("Location: devmode.html");
exit;
?>
