<?php

$route = $_GET['route']; // route is a htaccess thing
//echo $route; // malo li
$coredir = $_SERVER['DOCUMENT_ROOT'] . "/core/"; // just a core directory
$layoutdir = $_SERVER['DOCUMENT_ROOT'] . "/layout/"; // just a layout directory
$errorpagesdir = $coredir . "processing/errorpages/"; // error executing directory
$pagesoutputdir = $coredir . "processing/pages/"; // main layout executing directory

?>