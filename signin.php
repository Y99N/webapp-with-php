<?php
    session_start();
    include('../dbconct/connection.php');
    if(empty($_POST["fn"])||empty($_POST["ln"])||empty($_POST["em"])||empty($_POST["pw"])||empty($_POST["g"])){
        echo "<h4>All Fields need to be field</h4>";
        echo "<a href='../webpage/index/signin.html'>Try againe here</a>";
    }
    else{
        $search->execute([
            ":em"=>$_POST['em']
        ]);
        $n = $search->rowCount();
        if($n == 0){
            $insert->execute([
                ":fn"=>$_POST["fn"],
                ":ln"=>$_POST["ln"],
                ":em"=>$_POST["em"],
                ":pw"=>md5($_POST["pw"]),
                ":g"=>$_POST["g"],
                ":s"=>1
            ]);
            $_SESSION["fn"]=$_POST["fn"];
            $_SESSION["ln"]=$_POST["ln"];
            $_SESSION["em"]=$_POST["em"];
            header("location: ../webpage/index/account.php");
        }else{
            echo "<h4>This EMAIL is already used</h4>";
            echo "<a href='../webpage/index/signin.html'>Try againe here</a>";
        }
    }
?>

