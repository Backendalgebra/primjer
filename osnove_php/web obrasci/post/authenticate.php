<?php
$submitted = !empty($_POST);
?>
<p>Form submited? <?php echo (int) $submitted; ?> </p>
<p> your loggin info is</p>
<ui>
    <li><b>username</b>: <?php echo $_POST["username"]?></li>
    <li><b>password</b>: <?php echo $_POST["password"]?></li>
</ui>