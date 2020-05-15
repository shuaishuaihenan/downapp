
<?php
$data = file_get_contents('php://input');
$myfile = fopen("udid.txt", "w") or die("Unable to open file!");
fwrite($myfile, $data);
fclose($myfile);
header('HTTP/1.1 301 Moved Permanently'); 
?>
