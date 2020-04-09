<!-- Problem -->
<!-- // "print_r($testData)" returns 2 so I thought "print_r($result->fetch_assoc())" would return the information of user whose use_id = 2 but it would return the one with user_id = 3
    // Why does it happen??? -->


<?php
    require_once "Database.php";
    class Match extends Database{
        public function getAllMatches($userID){
            $sql = "SELECT  * FROM users WHERE user_id >
                        (SELECT user_id1 FROM matches WHERE user_id2 = $userID)";
            $result = $this->conn->query($sql);
            // $sql2 = "SELECT  * FROM users WHERE user_id >
            //             (SELECT user_id2 FROM matches WHERE user_id1 = 1)";
            $test = "SELECT user_id1 FROM matches WHERE user_id2 = $userID";
            $testResult = $this->conn->query($test);
            $testData = $testResult->fetch_assoc();
            print_r($testData);
            
            // $result2 = $this->conn->query($sql2);
            if($result->num_rows > 0){
                print_r($result->fetch_assoc());
            }else{
                return 'NO MATCH YET';
            }
        }
    }

?>