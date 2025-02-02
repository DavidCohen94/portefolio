<?php
    session_start();

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        try {
            $db_connection = new PDO(
                "mysql:host=localhost;dbname=hotel;charset=utf8",
                "root", ""
            );
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        function check_email($db_connection, $email) {
            $db_request = $db_connection->prepare(
                "SELECT email FROM users
                WHERE email=:email"
            );
            $db_request->execute([
                "email" => $email,
            ]);
            if ($db_request->rowCount()) {
                echo "User already exists!!!";
                return false;
            }
            return true;
        }

        if (check_email($db_connection, $_POST["email"])) {
            $db_request = $db_connection->prepare(
                "INSERT INTO users (username, email, password) VALUES
                (:username, :email, :password)"
            );
            $db_request->execute([
                ":username" => $_POST["username"],
                ":email" => $_POST["email"],
                ":password" => password_hash($_POST["password"], PASSWORD_DEFAULT),
            ]);

            $db_request = $db_connection->prepare(
                "SELECT id FROM users WHERE email=:email"
            );
            $db_request->execute([
                ":email" => $_POST["email"],
            ]);
            $user = $db_request->fetch();
            $_SESSION["user_id"] = $user["id"];

            header("Location: index.php");
            exit();
        }
    }
?>