<?php

global $params;
var_dump($params);
//check if user = admin
if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin') {
    switch ($params[2]) {
        case 'products':
            echo "het werkt";
            break;
    }
}
else {
    //if normal user
    header("Location: /");
}