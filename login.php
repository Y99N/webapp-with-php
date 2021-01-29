<?php
    session_start();
    include('../dbconct/connection.php');
    if(empty($_POST['em'])||empty($_POST['pw'])){
        echo "<h4>All Fields need to be field</h4><br>";
        echo "<a href='../webpage/index/login.html'>Try againe here</a>";
    }else{
        $login->execute([
            ":em"=>$_POST['em'],
            ":pw"=>md5($_POST['pw'])
        ]);
        $n = $login->rowCount();
        if($n == 1){
            $search->execute([
                ":em"=>$_POST['em']
            ]);
            $statue->execute([
                ':s'=>1,
                ':em'=>$_POST['em']
            ]);
            $elem = $search->fetch(PDO::FETCH_ASSOC);
            $_SESSION['em'] = $elem['em'];
            $_SESSION['ln'] = $elem['ln'];
            $_SESSION['fn'] = $elem['fn'];
            header('location: ../webpage/index/account.php');
        }
    }
?>