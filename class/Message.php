<?php
    require_once "Database.php";
    class Message extends Database{
        function sendMessages($userID,$receivedID,$message){
            $sql = "INSERT INTO messages(user_id,received_user_id,textmessage,created_at)VALUES('$userID','$receivedID','$message',NOW())";

            $result = $this->conn->query($sql);
            if($result == TRUE){
                // header("Location: " . $_SERVER['PHP_SELF']);
            }else{
                die('cannot send message '.$this->conn->error);
            }
        }
        function getMessages($userID,$receivedID){
            $sql = "SELECT u.username,u.user_image1,m.textmessage,m.created_at FROM users u,messages m WHERE u.user_id = m.user_id AND ((m.user_id = $userID AND m.received_user_id = $receivedID) OR (m.user_id = $receivedID AND m.received_user_id = $userID))";
            // echo $sql;
            $result = $this->conn->query($sql);
 
            if($result->num_rows > 0){
                $dataHolder = array();
                while($tableData = $result->fetch_assoc()){
                    $dataHolder[] = $tableData;
                }
                return $dataHolder;
                // print_r($dataHolder);
            }else{
                return false;
            }
        }

        function getTheLatestMessage($userID,$matchUserID){
            $sql = "SELECT * FROM messages WHERE (user_id = $userID AND received_user_id = $matchUserID) OR (user_id = $matchUserID AND received_user_id = $userID) ORDER BY created_at DESC LIMIT 1";

            $result = $this->conn->query($sql);

            if($result->num_rows>0){
                return $result->fetch_assoc();
            }else{
                return '';
            }
        }

    }
?>