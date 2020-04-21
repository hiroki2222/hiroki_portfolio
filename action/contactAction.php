<?php
    require_once '../class/Contact.php';
    session_start();
    $contact = new Contact;
    if(isset($_POST['contact'])){
        $userID = $_SESSION['user_id'];
        $category = $_POST['category'];
        $subject = $_POST['subject'];
        $content = $_POST['content'];
        if($_POST['reported_id']){
            $reportedID = $_POST['reported_id'];
        }else{
            $reportedID = "";
        }
        
        $contact->sendContact($userID,$category,$subject,$content,$reportedID);
    }
?>