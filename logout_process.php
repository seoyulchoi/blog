<?php
    require_once('library.php');

    session_destroy();

    header('Location: /index.php');
?>
