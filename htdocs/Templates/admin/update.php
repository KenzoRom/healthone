<!doctype html>
<html lang="en">
<?php
include_once(TEMPLATE_ROOT . '/defaults/head.php');
include_once(TEMPLATE_ROOT . '/defaults/adminnav.php');
global $toUpdateProductId;
$categories=getCategories();
$product=getAllProducts($toUpdateProductId);
?>
<body>

<main class='container'>
    <br>
    <h1 class="yellow-text">Update Product</h1>
    <form method="post">
        <label>Naam:</label><br>
        <input name="product-name" type="text" value="<?php foreach ($product as $data){echo $data->name;} ?>"><br>
        <label>Categorie</label><br>
        <select name="category-id" class="form-select" style="width: 25% !important; text-align: center !important; margin-left: 500px;">
            <option value="<?php foreach ($product as $data){echo $data->category_id;} ?>"><?php foreach ($product as $data){echo $data->name;} ?></option>
            <?php
            foreach ($categories as $category){
                echo "<option value='$category->id'>$category->name</option>";
            }
            ?>
        </select>
        <br>
        <label>Descriptie</label><br>
        <textarea  name="description" id="" cols="30" rows="5" ><?php foreach ($product as $data){echo $data->description;} ?></textarea><br>
        <button class="btn btn-outline-secondary yellow btn-block white"<input name="submit" type="submit"">Update</button>
    </form>
</main>
<?php
include_once(TEMPLATE_ROOT . '/defaults/footer.php');
?>
</body>
</html>