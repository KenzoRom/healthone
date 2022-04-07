<!DOCTYPE html>
    <html>
    <?php
    include_once('defaults/head.php');
    ?>
    <body>
        <div class="container-fluid main">
            <?php
            
            include_once ('defaults/menu.php');
            ?>


            <div class="container mt-4 mb-4 p-3 d-flex justify-content-center">
                <div class="card p-4">
                    <div class=" image d-flex flex-column justify-content-center align-items-center"> <button class="btn btn-secondary rounded"><img src="img/jacked.jpg" class="rounded-circle" height="100" width="100" /></button>
                    <div class="d-flex flex-row justify-content-center align-items-center mt-3"><b> EDIT </b></div>
                    <div class="d-flex flex-row justify-content-center align-items-center mt-3">
                        <form action="" method="post">
                            <label>Email: </label><br>
                            <input type="text" name="" value="<?= $_SESSION['email'] ?>"><br>
                            <label>Password: </label><br>
                            <input type="text" name="" value="<?= $_SESSION['password'] ?>"><br>
                        </form>
                    </div>
                        <div class=" d-flex mt-2"> <a href="/profileEdit" class="btn1" style="text-decoration:none; background: rgba(0, 255, 0, 1);">Confirm Changes</a> </div>
                        <!-- <div class="text mt-3"> Description area </div> -->
                        <div class="gap-3 mt-3 icons d-flex flex-row justify-content-center align-items-center"> <span><i class="fa fa-twitter"></i></span> <span><i class="fa fa-facebook-f"></i></span> <span><i class="fa fa-instagram"></i></span> <span><i class="fa fa-linkedin"></i></span> </div>
                    </div>
                </div>
            </div>


            <?php
            include_once ('defaults/footer.php');
            ?>
        </div>
    </body>
</html>
