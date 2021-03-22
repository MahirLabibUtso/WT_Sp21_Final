<?php
    session_start();
?>

<html>
    <body>
        <h2>WELCOME <?php echo $_SESSION["user"];?></h2>
    </body>
</html>