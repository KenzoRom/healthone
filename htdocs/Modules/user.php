<?php

function checkLogin(string $email, string $password) {
    global $pdo;
    $sth = $pdo->prepare("SELECT email, role FROM users WHERE email = ? AND pass = ?");
    $sth->bindParam(1, $email);
    $sth->bindParam(2, $password);
    $sth->setFetchMode(PDO::FETCH_CLASS, User::class);
    $sth->execute();
    return $sth->fetch();
}   

function RegisterUser(string $username, string $email, string $password) {
    global $pdo;
    try {
        if(isset($_POST["register"])) {
            if(empty($username) || empty($email) || empty($password) || empty($_POST["repeatpass"])) {
                echo '<label class="text-danger">You must fill all fields.</label>';
            } else if ($password !== $_POST["repeatpass"]){
                echo '<label class="text-danger">The passwords dont match!</label>';
            } else {
                $query = 'SELECT * FROM users WHERE username = :username OR email = :email'; //CHECKT OF DE EMAIL OF USERNAME AL IN GEBRUIK IS
                $statement = $pdo->prepare($query);
                $statement->execute(
                    array(
                        'username' => $username,
                        'email' => $email
                    )
                );
                $count = $statement->rowCount();
                if ($count > 0) {
                    echo '<label class="text-danger">Email of username is al in gebruik.</label>';
                } else { //Als de email / user niet in de db staat dan gebeurt dit
                    $query = 'INSERT INTO users (username, pass, email) VALUES (:username, :pass, :email)';
                    $statement = $pdo->prepare($query);
                    $statement->execute(
                        array(
                            'username' => $username,
                            'pass' => $password,
                            'email' => $email
                        )
                    );
                    header("location: /inlog");  //Na de user in de db staat ga je naar de login
                }
            }

        }
    } catch (PDOException $error) {
        $message = $error->getMessage();
        echo $message;
    }
}