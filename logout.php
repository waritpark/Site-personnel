
<?php
    session_name("admin");
    session_start();
    session_unset();
    session_destroy();
    header("Location: http://localhost/site-perso/index.php");
    exit();
?>
