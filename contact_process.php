<?php
    require_once('library.php');

    $name = $_POST['name'];
    $message = $_POST['message'];
    $secret = $_POST['secret'];
    $password = $_POST['password'];
    $ip = $_SERVER['REMOTE_ADDR'];

    $sql = "
        INSERT INTO cave_contact(
            name, date, message, secret, password, ip
        ) VALUES (
            '{$name}', NOW(), '{$message}', '{$secret}', '{$password}', '{$ip}'
        )
    ";

    $result = mysqli_query($conn, $sql);

    if($result == false)
    {
        echo mysqli_error($conn);
    }
    else
    {
        header('Location: /contact.php');
    }
?>