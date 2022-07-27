<?php
    require_once('header.php');
?>

        <h2>Login</h2>
        <form action="login_process.php" method="post">
          <p>
            <input type="text" name="id" placeholder="ID" />
          </p>
          <p>
            <input type="password" name="password" placeholder="Password" />
          </p>
          <p>
            <input type="submit" value="LOGIN" />
          </p>
        </form>

<?php
    require_once('footer.php');
?>