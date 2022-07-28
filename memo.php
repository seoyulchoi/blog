<?php
  require_once('header.php');
?>

        <h2>Memo</h2>

        <form action="memo_process.php" method="post">
            <p>
                <textarea name="memo" placeholder="Memo"></textarea>
            </p>
            <p>
                <input type="checkbox" name="secret" value="true" id="secret" /><label for="secret">secret</label>
                <input type="submit" value="SEND" />
            </p>
        </form>

<?php

  $sql = "
    SELECT memo, date, secret FROM cave_memo
    ORDER BY no DESC
  ";
  $result = mysqli_query($conn, $sql);

  while($row = mysqli_fetch_array($result))
  {
    $memo = $row['memo'];
    $date = $row['date'];
    $secret = $row['secret'];

?>

        <hr />

        <p class="date"><?=$date?></p>

<?php
    if($secret == 0)
    {
?>

        <p class="text"><?=$memo?></p>

<?php

    }
    else
    {
?>

        <p class="text">secret</p>

<?php
    }
  }

?>

<?php
  require_once('footer.php');
?>
