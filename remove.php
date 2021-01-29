<?php

    session_start();
    include('../dbconct/connection.php');
    if(!isset($_POST['s'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../webpage/style/style.css">
    <title>Delete Account</title>
</head>
<body>
    <div class="nav">
        <div class="logo">
            Mysite
        </div>
        <div class="link">
           <a href="../webpage/index/account.php">Acount</a>
        </div>
    </div>
    <div class="body">
        <div class="c1"></div>
        <div class="Mainc">
            <fieldset>
                <legend>Remove Account</legend>
                <form action="remove.php" method="post">
                    <table>
                        <label>Enter Your password to remove your account</label>
                        <tr>
                            <td>Password:</td><td><input type="password" name="pw"></td>
                        </tr>
                    </table>
                    <input type="submit" value="submit" name="s">
                </form>
            </fieldset>
        </div>
        <div class="c2"></div>
    </div>
</body>
</html>
<?php
    }else{
        $login->execute([
            ':em'=>$_SESSION['em'],
            ":pw"=>md5($_POST['pw'])
        ]);
        $n = $login->rowCount();
        if($n == 1){
            $delete->execute([
                ":em"=>$_SESSION['em']
            ]);
            unset($_SESSION["em"]);
            unset($_SESSION["fn"]);
            unset($_SESSION["ln"]);
            header("location: ../webpage/index/login.html");
        }else{
            header('location: #');
        }
    }

?>