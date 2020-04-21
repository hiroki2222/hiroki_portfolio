<?php
    require_once '../class/User.php';
    $user = new User();
    session_start();

    if(isset($_POST['register'])){
        $username = $_POST['username'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $check = $user->checkExistedAccount($email);
        if($check == TRUE){
            // echo $check;
            // echo "That email is already taken...";
            return $_SESSION['duplicate_error'] = TRUE;
        }elseif($check == FALSE){
            // echo "ACCOUNT CREATED";
            $user->createAccount($username,$gender,$email,$password);
            header('Location:../views/index.php');
            exit();
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
        $userID = $_SESSION['user_id'];
        $profileMessage = $_POST['profile_message'];
        // $pic = $_FILES['pic']['name'];
        $result = $user->addDetails($address,$age,$likeGender,$job,$school,$hobby,$profileMessage,$userID);



        // $target_dir = "../upload/";
        // $target_file = $target_dir.basename($_FILES["pic"]["name"]);

        // $result = $user->uploadPhoto($pic);
        if($result == 1){
            // move_uploaded_file($_FILES['pic']['tmp_name'],$target_file);
            if($_SESSION['login_times'] == 1){
                header('Location:../views/dashboard.php');
            }else{
                header('Location:../views/profile.php');
            }
        }else{
            echo 'Error';
        }
    }
    elseif(isset($_POST['skip'])){
        if($_SESSION['login_times'] == 1){
            header('Location:../views/dashboard.php');
        }else{
            header('Location:../views/profile.php');
        }
    }
    elseif(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        
        $login = $user->login($email,$password);
        if ($login) {
            $_SESSION['user_id'] = $login['id'];
            if ($login['status'] == 'A') {
                header('Location: ../views/adminTop.php');
            } else {
                $user->updateLoginTimes($_SESSION['user_id']);
                $loginTimes = $user->getLoginTimes($_SESSION['user_id']);
                $_SESSION['login_times'] = $loginTimes;
                if($_SESSION['login_times'] == 1){
                    header("Location: ../views/setPicture.php");
                }else{
                    header("Location: ../views/dashboard.php");
                }
            }
        }else {
            echo "Incorrect Email and Password";
        }
    }
    // elseif(isset($_POST['edit'])){
    //     $address = $_POST['address'];
    //     $likeGender = $_POST['like'];
    //     $job = $_POST['job'];
    //     $school = $_POST['school'];
    //     $hobby = $_POST['hobby'];
    //     $userID = $_SESSION['user_id'];
    //     // $pic = $_FILES['pic']['name'];

    //     // $target_dir = "../upload/";
    //     // $target_file = $target_dir.basename($_FILES["pic"]["name"]);

    //     $result = $user->editUser($address,$likeGender,$job,$school,$hobby,$userID);
        // if($result == TRUE){
        //     move_uploaded_file($_FILES['pic']['tmp_name'],$target_file);
        //     header('Location:../views/profile.php');
        // }else{
        //     echo 'Error';
        // }
    // }
    elseif(isset($_POST['update_photo'])){
        $pic = $_FILES['pic']['name'];
        // echo $pic;
        // echo count($pic);
        // var_dump($_FILES);
        $userID = $_SESSION['user_id'];
        $btnValue = $_POST['update_photo'];
        $target_dir = "../upload/";
        $target_file = $target_dir.basename($_FILES["pic"]["name"]);
        $result = $user->updatePhoto($pic,$userID);
        if($result == TRUE){
            move_uploaded_file($_FILES['pic']['tmp_name'],$target_file);
            if($btnValue == "profile"){
                header('Location:../views/profile.php');
            }else{
                header('Location:../views/addMoreInfo.php');
            }
        }else{
            echo 'Error';
        }
    }

?>