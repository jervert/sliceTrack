<?php
// server.php
$path = pathinfo($_SERVER["SCRIPT_FILENAME"]);
if ($path["extension"] == "json") {
    header("Content-Type: text/json");
    readfile($_SERVER["SCRIPT_FILENAME"]);
} else if ($path["extension"] == "gpx") {
    header("Content-Type: text/xml");
    readfile($_SERVER["SCRIPT_FILENAME"]);
}
else {
    return FALSE;
}
?>