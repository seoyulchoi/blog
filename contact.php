<?php
  require_once('header.php');
?>

        <h2>Contact</h2>
        <p>이메일: <a href="mailto:seoyul.rosaria.choi@gmail.com">seoyul.rosaria.choi@gmail.com</a></p>

        <form action="contact_process.php" method="post">
            <p>
                <input type="text" name="name" placeholder="Name" />
            </p>
            <p>
                <textarea name="message" placeholder="Message"></textarea>
            </p>
            <p>
                <input type="submit" value="SEND" />
            </p>
        </form>

<?php
  require_once('footer.php');
?>
