<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');
GLOBAL $product;
?>

<body>

<div class="container">
    <?php
    include_once('defaults/header.php');
    include_once('defaults/menu.php');
    include_once('defaults/pictures.php');
    ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item"><a href="/categories">Categories</a></li>
        </ol>
    </nav>

    <div class="row gy-3 ">
        <div class="product-card">
            <img
        </div>
    <?php
        echo $product->name;
    ?>
        <img src="<?= $product->image ?>">
    <?php
    include_once('defaults/footer.php');

    ?>
</div>

</body>
</html>

