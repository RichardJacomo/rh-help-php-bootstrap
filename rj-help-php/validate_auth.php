<?php
    session_start();

    if(!$_SESSION["auth"] || $_SESSION["auth"] !== "yes"){
        header("location: index.php?login=erro-auth");
    }
?>