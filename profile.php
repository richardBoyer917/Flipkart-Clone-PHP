<?php
require 'globals.php';

include 'header.php';

if(!isset($_SESSION['login'])){
    // header('location:index.php');
    echo "<script>location.href='".$URL."/login.php';</script>";
}

include 'partials/_categories_nav.php';

include 'partials/_profile.php';

include 'partials/_footer.php';
?>