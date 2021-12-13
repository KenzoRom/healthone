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

    <div class="product-box">
        <h1><?= $product->name ?></h1>
        <img src="<?= $product->image ?>">
        <p><?= $product->description ?></p>
    </div>
    <?php
    include_once('defaults/footer.php');

    ?>
</div>

</body>
</html>

