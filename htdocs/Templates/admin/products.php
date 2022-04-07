<!DOCTYPE html>
<html>
<?php
include_once(TEMPLATE_ROOT . '/defaults/head.php');
?>

<body>

<div class="container">
    <?php
    include_once(TEMPLATE_ROOT . '/defaults/header.php');
    include_once(TEMPLATE_ROOT . '/defaults/adminnav.php');
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
                        <div class='card-footer'>
                            <a href='/admin/update/$data->id'><button class='btn btn-outline-primary'>Update</button></a>
                            <a href='/admin/deleteProduct/$data->id'><button class='btn btn-outline-danger'>Delete</button></a>
                        </div>
                            

                    </div> 

                </div>
            </div>
            ";
        }
      ?>
        <div class="row">
            <div class="col-12">
                <a href="/admin/addProduct"><button class="btn btn-outline-secondary yellow btn-lg">Add</button></a>
            </div>
        </div>
    </div>

    <hr>
    <?php
    include_once(TEMPLATE_ROOT . '/defaults/footer.php');

    ?>
</div>

</body>
</html>

