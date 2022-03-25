<?php
    session_start();
    if(!isset($_SESSION["login_credentials"])) {
        header("Location: ./index.php?loginFirst");
        exit();
    }
?>