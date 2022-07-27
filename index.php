<?php
    require_once('header.php');

    if(isset($_SESSION['user']))
    {
      echo "안녕하세요 ".$_SESSION['user']['name']."님!!";
    }
    else
    {
      echo "<img src=\"underconstruction.gif\" /><br/>";
      echo "케이브 공사 중";
    }
  
    require_once('footer.php');
?>
