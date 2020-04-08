<?php

    include '../action/userAction.php';
    include '../action/likeAction.php';
    // $userID = $_GET['user_id'];
    $userID = $_SESSION['user_id'];
    $receivedUserID = $_SESSION['selected_id'];
    $sendLike = $like->sendLike($userID,$receivedUserID);
    if($sendLike){
        $checkLike = $like->checkLike($receivedUserID,$userID);
        if($checkLike){
            header('Location:dashboard.php');
        }
    }
?>