<?php

function RegisterUser($string $username, string $email, string $password) {
    $global $pdo;
    try {
        if(isset($_POST["register"])) {
            if(empty($username) || empty($password)) {
                $alert = '<label>You must fill all fields.</label>';
            } else {
                
                //Checkt of de user/email al in de db staat
                /*
                $query = 'SELECT * FROM users WHERE username = :username OR email = :email';
                $result = $pdo->prepare($query);
                $result->execute(
                    array(
                        'username' => $username,
                        'email' => $email
                    )
                );
                $count = $result->rowCount()
                */
            }
        }
    }
}