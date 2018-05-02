<a href="http://localhost/php2/variable/global.php?page=home&a=1&hobby=main"> Click me </a>
<br>
<?php

   
    // variable super global
    /* $_SESSION ; // variable yang asalnya dari server . login , cart 
    $_COOKIE; // variable ini disimpan di browser

    // dinamakan request method // GET, POST , PUT, DELETE
    $_GET; // variable yang asalnya dari url 
    $_POST; // variable yg asalnya dari form
    $_REQUEST; // bisa get bisa post. berasal dari user 
    $_FILES; // upload 

    $_SERVER; // data server 
    $_ENV; // setting project , kepanjangan dari environment */

    // semua variable superglobal bertipe data array 

    //print_r($_GET);

    echo $_GET["hobby"];
?>


  

