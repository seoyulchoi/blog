<?php
    require_once('library.php');

    $memo = $_POST['memo'];
    $secret = $_POST['secret'] == true ? 1 : 0;
    $ip = $_SERVER['REMOTE_ADDR'];

    $sql = "
        INSERT INTO cave_memo(
            date, memo, secret, ip, filename
        ) VALUES (
            NOW(), '{$memo}', '{$secret}', '{$ip}', '{$filename}'
        )
    ";

    $result = mysqli_query($conn, $sql);

    if($result == false)
    {
        echo mysqli_error($conn);
    }
    else
    {
        header('Location: /memo.php');
    }
?>