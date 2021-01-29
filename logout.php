<?php
    session_start();
    include('../dbconct/connection.php');
    $statue->execute([
        ":em"=>$_SESSION["em"],
        ":s"=>0
    ]);
    unset($_SESSION["em"]);
    unset($_SESSION["fn"]);
    unset($_SESSION["ln"]);
    header("location: ../webpage/index/login.html");
?>