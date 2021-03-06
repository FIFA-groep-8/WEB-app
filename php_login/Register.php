<?php
require('dbc.php');

if (isset($_POST['reg_button'])){
    $username = $_POST['reg_username'];
    $email = $_POST['reg_email'];
    $pass = $_POST['reg_password'];
    $hash = password_hash($pass, PASSWORD_DEFAULT);

    $query = $conn->prepare("SELECT username FROM tbl_users WHERE username = ?");
    $qry = $conn->prepare("SELECT email FROM tbl_users WHERE email = ?");

    $query->bindValue(1, $username);
    $query->execute();

    $qry->bindValue(1, $email);
    $qry->execute();

    if ($username == "" || $pass == "" || $email == "" || strlen($pass) < 7){
        echo "please enter your username or password";
    } else{
        if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match('/^(?=.*[A-Z])(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{7,50}$/', $pass)){
            echo "please enter the correct email or password";
        } else{
            if ($query->rowCount() > 0 || $qry->rowCount() > 0 ) {
                echo "Account already exists";
                header("location: login.php?message=already exits");
                die();
            } else {
                $pdoQry_users = 'INSERT INTO tbl_users(username, password, email) VALUES (:username, :password,:email)';
                $pdoResult = $conn->prepare($pdoQry_users);
                $pdoExec = $pdoResult->execute(array(":username" => $username,":password" => $hash, ":email" => $email));

                header('location: login.php?message=you have created an account');

            }
        }

    }
}

if (isset($_POST['log_button'])){
    $password = $_POST['password'];
    $username = $_POST['username'];

    $query = $conn->prepare("SELECT username FROM tbl_users WHERE username = :username");

    $query->bindValue(":username", $username);
    $query->execute();

    if ($username == "" && $password == ""){
        echo "please enter your username or password";
    } else{
        if ($query->rowCount() > 0){

            $smt = $conn->prepare("SELECT password FROM tbl_users WHERE username = :username");
            $smt->bindValue(":username", $username);
            $smt->execute();

            $hash = $smt->fetch();

            if (password_verify($password, $hash['password'])){
                header('location: login.php');

            }
        } else {
            header('location: login.php');
        }
    }

}