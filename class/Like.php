<?php
    require_once "Database.php";
    
    class Like extends Database{
        
        function sendLike($yourID,$receivedID){
            $sql = "INSERT INTO likes(user_id,received_user_id)VALUES('$yourID','$receivedID')";
            $result = $this->conn->query($sql);
            if($result == TRUE){
                return TRUE;
                // header("Location:../views/dashboard.php");
                // echo 'success';
            }else{
                die('cannot send like '.$this->conn->error);
            }
        }
        function checkLike($receivedID,$yourID){
            $sql = "SELECT * FROM likes where user_id = '$receivedID' AND received_user_id = '$yourID' ";
            $result = $this->conn->query($sql);
            if($result->num_rows > 0){
                $addMatchSql = "INSERT INTO matches(user_id1,user_id2)VALUES('$yourID','$receivedID')";
                $addResult = $this->conn->query($addMatchSql);
                if($addResult == TRUE){
                    return 'Match';
                }else{
                    echo 'CANNOT ADD THE MATCH';
                }
            }else{
                return TRUE;
            }
        }

    }
    
?>