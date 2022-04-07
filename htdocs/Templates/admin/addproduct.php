<!DOCTYPE html>
<html lang="en">
<?php
include_once(TEMPLATE_ROOT . '/defaults/head.php');
include_once(TEMPLATE_ROOT . '/defaults/adminnav.php');
global $categories;
?>
<body>
<main class='container'>
    <br>
    <div>
        <h1>Welkom bij Health One Admin add producten</h1>
    </div>

    <h1 class="yellow-text ">Product toevoegen</h1>
    <form method="post">
        <label>Naam:</label><br>
        <input name="product-name" type="text" placeholder="Naam product"><br>
        <label>Categorie</label><br>
        <select name="category" class="form-select" style="width: 25% !important; text-align: center !important; margin-left: 500px;">
            <option value="">Categorie naam</option>
            <?php
            foreach ($categories as $category){
                echo "<option value='$category->id'>$category->name</option>";
            }
            ?>
            <br>
        </select>
        <label>Descriptie</label><br><br>
        <textarea name="description" id="" cols="30" rows="5" placeholder="Zet hier de descriptie"></textarea><br><br>
        <input type="file" class="btn btn-lg btn-block  " name="picture"><br>
        <button class="btn btn btn-outline-secondary yellow"<input name="submit" type="submit"">Uploaden</button>

    </form>
</main>
<?php
include_once(TEMPLATE_ROOT . '/defaults/footer.php');
?>
</body>
</html>
