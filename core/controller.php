<?php
// main controller

require_once($_SERVER['DOCUMENT_ROOT'] . "/core/config/path.php"); // $route, directories n other things

if ($route == "") {
    require($pagesoutputdir . "displayindex.php");
} elseif ($route == "admin") {
    require($layoutdir . "admin.php");
} else {
    require($pagesoutputdir . "displaylibrary.php");
};

// htaccess file dump

//RewriteEngine On
//RewriteCond %{REQUEST_FILENAME} !-d
//RewriteCond %{REQUEST_FILENAME} !-f
//RewriteRule ^(.+)$ index.php?route=$1 [QSA,L]

?>