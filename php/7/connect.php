<?php

$dsn = 'mysql:dbname=sample;host=localhost;charset=utf8';
$user = 'root';
$password = '';

//$name = '太田美香';
//$age = '33';


$email = 'prepare@statement.com';

try{

    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    $sql = "INSERT INTO user (name, age) VALUE (:name, :age)";
    $sql = "UPDATE user SET email = :email WHERE id = 3";
    $stmt = $dbh->prepare($sql);
//    $stmt->bindValue(':id', $id, PDO::PARAM_STR);
    $stmt->bindValue(':email', $email, PDO::PARAM_STR);
    $stmt->execute();
    echo '処理が終了しました';
}catch (PDOException $e){
    print($e->getMessage());
    die();
}