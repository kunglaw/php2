<?php
    include "config/config.php";
    include "config/koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
    <?php include "template/head.php" ?>
</head>
<body>
    <div class="container">
        <?php include "template/navbar_login.php" ?>
        
        <form action="<?=$base_url."process/login_process.php"?>" class="form col-md-5" method="post">
            <div class="form-group">
                <label> Email </label>
                <input class="form-control" type="text" name="email" value="">
            </div> 
            <div class="form-group">
                <label> Password </label>
                <input class="form-control" type="password" name="password" value="">
            </div>

            <button class="btn btn-primary" type="submit"> Login </button>
        </form>

        <?php include "template/footer.php"?>
    </div>
</body>
</html>
 
