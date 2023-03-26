<?php
    session_start();

    $title = str_replace("#", "-", $_POST["title"]);
    $category = str_replace("#", "-", $_POST["category"]);
    $description = str_replace("#", "-", $_POST["description"]);

    $text = $_SESSION["id"]. "#" . $title. "#" . $category. "#" .$description. PHP_EOL;
    $file = fopen("file.hd", "a");

    fwrite($file, $text);
    fclose($file);

    header("location: open_call.php")
?>