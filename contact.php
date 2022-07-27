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

  $sql = "
    SELECT name, message FROM cave_contact
    ORDER BY no DESC
  ";
  $result = mysqli_query($conn, $sql);

  while($row = mysqli_fetch_array($result))
  {
    $name = $row['name'];
    $text = $row['message'];

?>

        <hr />

        <p><?=$name?></p>
        <p><?=$text?></p>

<?php
  }
?>

<?php
  require_once('footer.php');
?>
