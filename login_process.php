<?php
    require_once('library.php');

    $id = $_POST['id'];
    $password = $_POST['password'];

    if($id == 'seoyul' && $password == '1234')
    {
        $_SESSION['user'] = array (
            'name' => '서율'
        );

        header('Location: /index.php');
    }
    else
    {
        header('Location: /login.php');
    }

?>
