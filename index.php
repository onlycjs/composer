<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="myFile">
        <input type="submit" value="전송">
    </form>
</body>
</html> -->
<?php

use Gondr\Route;

require ("vendor/autoload.php");
require ("web.php");

define("__ROOT", __DIR__);

$url = isset($_GET['url']) ? "/" . $_GET['url'] : "/";

Route::route($url);