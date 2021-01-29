<?php

    $pdo = new PDO("mysql:host=localhost;dbname=app","root","");
    $insert = $pdo->prepare("insert into users(fn,ln,em,pw,g,s)
       values(:fn,:ln,:em,:pw,:g,:s)");
    $search = $pdo->prepare("select * from users where em=:em");
    $statue = $pdo->prepare("update users set s=:s where em=:em");
    $login = $pdo->prepare('select * from users where em=:em and pw=:pw');
    $delete = $pdo->prepare("delete from users where em=:em");
?>