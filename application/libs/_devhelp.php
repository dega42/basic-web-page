<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
ini_set("html_errors",1);

function Listarray($param) {
    $out = print("<pre>" . print_r($param, true) . "</pre>");
    return $out;
}
