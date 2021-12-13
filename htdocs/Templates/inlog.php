<!DOCTYPE html>
    <html>
    <?php
    include_once('defaults/head.php');
    ?>
    <body>
        <div class="container">
            <?php
            include_once ('defaults/header.php');
            include_once ('defaults/menu.php');
            include_once ('defaults/pictures.php');
            ?>
            <div class="register-form">
                <h2>Login:</h2>
                <form class="form-style">
                Email address<input type="text">
                Wachtwoord<input type="text">
                <input type="submit" value="login" class="button-styling">
                </form>
            </div>
            <?php
            include_once ('defaults/footer.php');
            ?>
        </div>
    </body>
</html>
