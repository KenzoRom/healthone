<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');
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
    <?php
        foreach ($products as &$data) {
            echo "
            <div class='col-sm-4 col-md-3'>
                <div class='card'>
                    <div class='card-body text-center'>
                        <a href='/categories/". $data->categoryid ."/product/". $data->id ."'>
                            <img class='product-img img-responsive center-block' src='". $data->image . " 'alt='idk'/>
                        </a>
                        <div class='card-title mb-3'>". $data->name ."</div>
                    </div> 

                </div>
            </div>
            ";
        }
      ?>   
    </div>

    <hr>
    <?php
    include_once('defaults/footer.php');

    ?>
</div>

</body>
</html>

