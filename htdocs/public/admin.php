<?php

global $params;

//check if user = admin
if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin') {
    switch ($params[2]) {
        case 'products':
            $products = getAllProducts();
            include_once '../Templates/admin/products.php';
            break;

        case 'addProduct':

        $titleSuffix = ' | Add Product';
        $categories = getCategories();
        if(isset($_POST['submit'])){
            $toInsertProductName=filter_input(INPUT_POST,'product-name',FILTER_SANITIZE_STRING);
            $toInsertProductCategoryId=filter_input(INPUT_POST,'category',FILTER_SANITIZE_NUMBER_INT);
            $toInsertProductDescription=filter_input(INPUT_POST,'description',FILTER_SANITIZE_STRING);
            $toInsertProductPicture=filter_input(INPUT_POST,'picture');
            if(!empty($toInsertProductName) &&
                !empty($toInsertProductCategoryId) &&
                !empty($toInsertProductDescription) &&
                !empty($toInsertProductPicture)){
                $toInsertProduct=addProduct($toInsertProductName,$toInsertProductCategoryId,$toInsertProductDescription,$toInsertProductPicture);
            }
            else{
                echo "<script>alert('Niet Alle velden zijn ingevuld! probeer nog een keer')</script>";
            }
        }
        include_once "../Templates/admin/addProduct.php";
        break;

        case 'deleteproduct':
            $titleSuffix = ' | Delete Product';
            $toDeleteProductId=$params[2];

            $toDeleteProductId=$params[2];
            if(isset($_POST['submit'])){
                $toDeleteProduct=removeProduct($toDeleteProductId);
                header("Location: /admin/products");
            }
            if(isset($_POST['cancel'])){
                header("Location: /admin/products");
            }
            include_once "../Templates/admin/deleteproduct.php";
            break;
        case 'update':
            $toUpdateProductId=$params[2];

            if(isset($_POST['submit'])){
                $toUpdateProductName=filter_input(INPUT_POST,'product-name',FILTER_SANITIZE_STRING);
                $toUpdateProductCategoryId=filter_input(INPUT_POST,'category-id',FILTER_SANITIZE_STRING);
                $toUpdateProductDescription=filter_input(INPUT_POST,'description',FILTER_SANITIZE_STRING);
                if(!empty($toUpdateProductName)&&
                    !empty($toUpdateProductCategoryId)&&
                    !empty($toUpdateProductDescription)){
                    $toUpdateProduct=updateProduct($toUpdateProductName,$toUpdateProductCategoryId,$toUpdateProductDescription,$toUpdateProductId);
                    header("Location: /admin/products");
                }
                else{
                    echo "<script>alert('Niet alle velden zijn ingevuld !')</script>";
                }
            }
            include_once ('../Templates/admin/update.php');
            break;
    }
}
else {
    //if normal user

    include_once '../Templates/404.php';
    header("Location: /");
}