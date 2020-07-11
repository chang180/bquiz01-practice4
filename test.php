<?php
include "base.php";
$mvim = $Mvim->all(['sh' => 1]);
$data = [];
foreach ($mvim as $m) {
    array_push($data, "'img/" . $m['name']."'");
}
echo implode(",",$data);
?>