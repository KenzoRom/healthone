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
                <h2>Registreer:</h2>
                <form class="form-style">
                Email address<input type="text">
                Voornaam<input type="text">
                Achternaam<input type="text">
                Leeftijd<input type="date">
                <input type="submit" value="Registreer" class="button-styling">
                </form>
            </div>
            <?php
            include_once ('defaults/footer.php');
            ?>
        </div>
    </body>
</html>
