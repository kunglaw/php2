<?php
    session_start();
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
        <?php include "template/navbar.php" ?>
        <?php
            $_GET["p"] = isset($_GET["p"]) ? $_GET["p"] : "";

            if($_GET["p"] === "home" || empty($_GET["p"])    )
            {
                include "view/home.php";

            }else if($_GET["p"] === "student")
            {
                include "view/student.php";

            }else if($_GET["p"] === "student_add")
            {
                include "view/form_add_siswa.php";
                
            }else if($_GET["p"] === "student_update")
            {
                include "view/form_update_siswa.php";
            }


        ?>
        <?php include "template/footer.php"?>
    </div>
</body>
</html>
 
