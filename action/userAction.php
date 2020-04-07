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
            // $_SESSION['duplicate_error'] == TRUE;
        }elseif($check == FALSE){
            // echo "ACCOUNT CREATED";
            $user->createAccount($username,$email,$password);
        }
    }
    elseif(isset($_POST['add'])){
        $address = $_POST['address'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $likeGender = $_POST['like'];
        $job = $_POST['job'];
        $school = $_POST['school'];
        $hobby = $_POST['hobby'];
        $pic = $_POST['pic'];
        $userID = $_GET['user_id'];
        $user->addDetails($address,$age,$gender,$likeGender,$job,$school,$hobby,$userID);

        // $pic = $_FILES['pic']['name'];

        // $target_dir = "../upload/";
        // $target_file = $target_dir . basename($_FILES["pic"]["name"]);

        // $result = $user->uploadPhoto($pic);

        // if($result == 1){
        //     move_uploaded_file($_FILES['pic']['tmp_name'],$target_file);
        // }else{
        //     echo 'Error';
        // }
    }
    elseif(isset($_POST['skip'])){
        $user->skipDetails();
    }
    elseif(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = md5($_POST['password']);

        $login = $user->login($email,$password);
        if ($login) {
            $_SESSION['account_id'] = $login['id'];
            if ($login['status'] == 'A') {
                header('Location: ../views/adminTop.php');
            } else {
                header('Location: ../views/dashboard.php');
            }
        } else {
            echo "Incorrect Email and Password";
        }
    }

?>