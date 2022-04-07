<?php

global $params;
//check if user = admin
if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin') {
    switch ($params[2]) {
        case 'products':
            $products = getAllProducts();
            include_once '../Templates/admin/products.php';
            break;

        case 'addproduct'
            include_once '../Templates/admin/addProduct.php';
            break;
        
    }
}
else {
    //if normal user
    include_once '../Templates/404.php';
}