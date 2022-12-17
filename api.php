<?php
$album = file_get_contents("dischi.json");

$albums = json_decode($album, true);
$jason_string = json_encode($albums);
header("Content-Type: application/json");
echo $json_string;