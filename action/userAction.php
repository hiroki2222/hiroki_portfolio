<?php
    require_once '../class/User.php';
    $user = new User();
    session_start();

    if(isset($_POST['register'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $check = $user->checkExistedAccount($email);
        if($check == TRUE){
            // echo $check;
            echo "That email is already taken...";
        //     $_SESSION['duplicate_error'] == TRUE;
        }elseif($check == FALSE){
            echo "ACCOUNT CREATED";
            // $user->createAccount($username,$email,$password);
        }
    }

    // if(isset($_POST['register'])){
    //     $username = $_POST['username'];
    //     $email = $_POST['email'];
    //     $password = md5($_POST['password']);

    //     // $createAccount = $user->createAccount($email,$password);
    //     if($createAccount == 'f'){
    //         echo 'account exist';
    //         // $_SESSION['duplicate_error'] == TRUE;
    //     }else{
    //         // echo 'account doesnt exist';
    //         $user->createAccount($email,$password);
    //     }
    // }
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