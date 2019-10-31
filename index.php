

<?php

require "header.php";

?>
<main>
<br>
<br>
<br>
  <?php
    if(isset($_SESSION['Id'])){
      echo'<p> You are logged in!</p>';
    }
    else {
    echo'<p> You are logged out!</p>';
    }
  ?>
</main>

<?php
//aranaya ratra was here

require "footer.php";

?>
