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
            include_once ('defaults/errorMessage.php');
            ?>
            <div class="register-form">
                <h2>Login:</h2>
                <form method="POST" class="form-style">
                Email address<input type="text" name="email">
                Wachtwoord<input type="text" name="password">
                <input type="submit" name="inlog" value="login" class="button-styling">
                </form>
            </div>
            <?php
            include_once ('defaults/footer.php');
            ?>
        </div>
    </body>
</html>
