<?php 
    session_start();

    $users_bd = [
        [
            "id" => 1,
            "email" => "richard@gmail.com",
            "password" => 12345,
            "admin" => true
        ],
        [
            "id" => 2,
            "email" => "maria@gmail.com",
            "password" => 12345,
            "admin" => false
        ]
        ];

        $user_id = 0;
        $auth = false;

        foreach ($users_bd as $key => $user) {
            if ($user["email"] == $_POST["email"] && $user["password"] == $_POST["password"]) {
                $auth = true;
                $user_id = $user["id"]; 
                $_SESSION["admin"] = $user["admin"]; 
            }
        }

        if ($auth) {
            $_SESSION["auth"] = "yes";
            $_SESSION["id"] = $user_id;

            header("location: home.php"); 
            
        } else {
            $_SESSION["auth"] = "no";
    
            header("location: index.php?login=erro"); 
        } 
?>