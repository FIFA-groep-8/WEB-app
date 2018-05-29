<?php
session_start();
require ('../connection/dbconnector.php');

if (isset($_POST['log_button'])){
    $password = $_POST['password'];
    $username = $_POST['username'];

    $query = $conn->prepare("SELECT `username` FROM `tbl_users` WHERE `username` = :username");

    $query->bindValue(":username", $username);
    $query->execute();

    if ($username == "" && $password == ""){
        header('location: ../index.php?message=Enter');
    } else{
        $smt = $conn->prepare("SELECT `password` FROM `tbl_users` WHERE `username` = :username");
        $smt->bindValue(":username", $username);
        $smt->execute();

        $hash = $smt->fetch();

        if ($query->rowCount() > 0 && password_verify($password, $hash['password'])){

//            if (password_verify($password, $hash['password'])){
                $admin = $conn->prepare("SELECT `admin` FROM `tbl_users` WHERE `username` = '$username'");
                $admin->execute();
                $result = $admin->fetch(PDO::FETCH_COLUMN);


                if ($result == '1'){
                    $_SESSION['admin'] = $result;
                    header('location: ../index.php?message=asdnjhLogged In');
                    $_SESSION['logged_in'] = '1';
                } else{
                    $_SESSION['admin'] = '0';
                    header('location: ../index.php?message=asdnjhLogged In');
                    $_SESSION['logged_in'] = '1';
                }
//            }
        } else {
            header('location: ../index.php?message=Doesnt exists');
        }
    }

}

if (isset($_POST['reg_button'])){
    $username = $_POST['reg_username'];
    $email = $_POST['reg_email'];
    $pass = $_POST['reg_password'];
    $hash = password_hash($pass, PASSWORD_DEFAULT);

    $query = $conn->prepare("SELECT `username` FROM `tbl_users` WHERE `username` = ?");
    $qry = $conn->prepare("SELECT `email` FROM `tbl_users` WHERE `email` = ?");

    $query->bindValue(1, $username);
    $query->execute();

    $qry->bindValue(1, $email);
    $qry->execute();

    if ($username == "" || $pass == "" || $email == "" || strlen($pass) < 7){
        header("location: ../index.php?message=Fill In");
    } else{
        if (filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match('/^(?=.*[A-Z])(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{7,50}$/', $pass)){
            header("location: ../index.php?message=Incorrect");
        } else{
            if ($query->rowCount() > 0 || $qry->rowCount() > 0 ) {
                header("location: ../index.php?message=Already exists");
                die();
            } else {
                $pdoQry_users = 'INSERT INTO `tbl_users`(`username`, `password`, `email`) VALUES (:username, :password,:email)';
                $pdoResult = $conn->prepare($pdoQry_users);
                $pdoExec = $pdoResult->execute(array(":username" => $username,":password" => $hash, ":email" => $email));

                header('location: ../index.php?message=Created');
            }
        }

    }
}

if (isset($_POST['logout'])){
    $_SESSION['admin'] = '0';
    $_SESSION['logged_in'] = '0';
    header('location: ../index.php?message=?Logged out');

}
