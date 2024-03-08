<?php

/**
 * @var string $siteName
 * @var string $header
 * @var string $body
 * @var string $footer
 */

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="referrer" content="same-origin">
    <title><?= $siteName ?></title>
    <link rel="stylesheet" type="text/css" media="all" href="css/style.css">
    <script type="text/javascript" src="js/global.js"></script>
</head>

<body>
<?= $header ?>
<?= $body ?>
<?= $footer ?>
</body>
</html>
