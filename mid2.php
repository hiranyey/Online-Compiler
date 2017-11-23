<?php
require_once 'core.inc.php';
$s=key($_POST);
unset($_SESSION['sub']);
$_SESSION['sub']=$s;
header('Location:view.php');
?>