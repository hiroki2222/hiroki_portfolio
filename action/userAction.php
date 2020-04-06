<?php
    require_once '../class/User.php';
    $user = new User();
    session_start();

    if(isset($_POST['register'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);

        // if(!$createAccount){
        //     $_SESSION['duplicate_error'];
        // }else{
            $user->createAccount($username,$email,$password);
        // }
    }
    elseif(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $login = $user->login($username,$password);
        if ($login) {
            $_SESSION['user_id'] = $login['id'];
            if ($login['status'] == 'A') {
                header('Location: ../views/adminTop.php');
            } else {
                header('Location: ../views/userTop.php');
            }
        } else {
            echo "Incorrect Username and Password";
        }
    }
?>