<?php
session_start();
session_destroy();
header("Location: passvalidator.php");
exit();
