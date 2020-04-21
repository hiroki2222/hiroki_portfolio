<?php

    include '../action/userAction.php';
    include '../action/likeAction.php';
    // $userID = $_GET['user_id'];
    $userID = $_SESSION['user_id'];
    $receivedUserID = $_SESSION['selected_id'];
    $numberArray = $like->countLikesADay($userID);
    $likesADay = $numberArray['number'];
    if($likesADay <= 4){
        $sendLike = $like->sendLike($userID,$receivedUserID);
        if($sendLike){
            $checkLike = $like->checkLike($receivedUserID,$userID);
            if($checkLike){
                // if($likesADay == 4){
                //     $_SESSION['wait'] == 'wait';
                //     header('Location:dashboard.php');
                // }
                header('Location:dashboard.php');
            }
        }
    }else{
        echo 'You already used all likes today';
    }
?>