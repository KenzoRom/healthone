<!DOCTYPE html>
<html lang="en">
<?php
include_once(TEMPLATE_ROOT . '/defaults/head.php');
include_once(TEMPLATE_ROOT . '/defaults/adminnav.php');
?>
<body>
<main>
    <br>
    <div>
        <h1>Welkom bij Health One Admin deleten</h1>
    </div>
    <div class="container">

        <h2 class="yellow-text">Delete Product</h2>
        <form method="post">
            <p>Weet u zeker dat u het product wilt verwijderen?</p><br>
            <div class="row">
                <div class="col-6">
                    <button type="button submit" name="submit" class="btn btn-outline-secondary yellow float-end">Ja</button>
                </div>
                <div class="col-6">
                    <button type="button submit" name="cancel" class="btn btn-outline-secondary yellow float-start">Nee</button>
                </div>
            </div>
        </form>

        <!--                                Sent form-->
    </div>
</main>
<?php
include_once(TEMPLATE_ROOT . '/defaults/footer.php');
?>
</body>
</html>