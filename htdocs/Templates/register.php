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
                <h2>Registreer:</h2>
                <form method="POST" class="form-style">
                Email address<input type="text" name="email">
                Username<input type="text" name="username">                
                Wachtwoord<input type="text" name="password">
                Herhaal Wachtwoord<input type="text" name="repeatpass">
                <input type="submit" value="Registreer" class="button-styling" name="register">
                </form>
            </div>
            <?php
            include_once ('defaults/footer.php');
            ?>
        </div>
    </body>
</html>
