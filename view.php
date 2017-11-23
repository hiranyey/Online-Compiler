<?php
require_once 'core.inc.php';
$target_dir = 'uploads/'.$_SESSION['sub'].'/';
$tar=$target_dir;
$file=$tar.getfield('USERNAME').".txt";
if (file_exists($file)) {
    header('Location:'.$file);
} else {
    echo "YOU HAVENT SUBMITTED THE ASSIGMENT";
}
?>
