<?php
    require_once "Database.php";
    class Message extends Database{
        function sendMessages($userID,$receivedID,$message){
            $sql = "INSERT INTO messages(user_id,received_user_id,textmessage,created_at)VALUES('$userID','$receivedID','$message',NOW())";

            $result = $this->conn->query($sql);
            if($result == TRUE){
                return TRUE;
            }else{
                die('cannot send message '.$this->conn->error);
            }
        }
        function getMessages($userID,$receivedID,$message){
            $sql = "SELECT "
        }

    }
?>