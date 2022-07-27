<?php
    require_once('library.php');

    if(isset($_SESSION['user']))
    {
        $log_toggle = "<a href=\"logout_process.php\">Logout</a>";
    }
    else
    {
        $log_toggle = "<a href=\"login.php\">Login</a>";
    }

?>

<html>
    <head>
        <title>THE CAVE</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="style.php" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <div id="layout">
            <div id="title">
                <h1><a href="/">THE CAVE</a></h1>
            </div>
            <div id="menu">
                <ul class="menu">
                    <li><a href="#">menu1</a></li>
                    <li><a href="#">menu2</a></li>
                    <li><?=$log_toggle?></li>
                </ul>
            </div>
            <div id="content">
                