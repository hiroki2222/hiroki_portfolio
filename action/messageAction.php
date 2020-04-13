<?php
require_once '../class/Message.php';
require_once 'userAction.php';
$message = new Message();

if(isset($_POST['send_message'])){
    $userID = $_SESSION['user_id'];
    $receivedID = $_GET['user_id'];
    $userMessage = $_POST['message'];

    $message->sendMessages($userID,$receivedID,$userMessage);
}

?>