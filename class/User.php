<?php
    require_once "Database.php";
    class User extends Database{


        public function checkExistedAccount($email){
            $checkExistedAccount = "SELECT COUNT(*) AS account FROM accounts WHERE email='$email'" ;
            $resultOfCheck = $this->conn->query($checkExistedAccount);
            if($resultOfCheck->num_rows == 1){
                $row = $resultOfCheck->fetch_assoc();
                if($row['account'] == 1){
                    return TRUE;
                }else{
                    return FALSE;
                }
            }else{
                return FALSE;
            }
        }
        public function createAccount($username,$email,$password){
                $createAccount = "INSERT INTO accounts(email,password)VALUES('$email','$password')";
                $createUser = "INSERT INTO users(username)VALUES('$username')";
                $newAccount = $this->conn->query($createAccount);
                $newUser = $this->conn->query($createUser);
                if($newAccount == FALSE || $newUser == FALSE){
                    die('CANNOT ADD USER: '.$this->conn->error);
                }else{
                    // 生成したUSER IDを取得
                    $sql = "SELECT LAST_INSERT_ID()";
                    $result = $this->conn->query($sql);
                    $userIDArray = $result->fetch_assoc();
                    // print_r($userIDArray);
                    $userID = $userIDArray['LAST_INSERT_ID()'];
                    header("location:../views/addMoreInfo.php?user_id=$userID");
                }
            }

        public function addDetails($address,$age,$gender,$likeGender,$job,$school,$hobby,$userID,$pic){
            $sql = "UPDATE users SET address = '$address', age ='$age',gender = '$gender', like_gender='$likeGender', job = '$job', school = '$school', hobby = '$hobby',user_image1 = '$pic' WHERE user_id = '$userID'";
            $result = $this->conn->query($sql);

            if($result == FALSE){
                die('CANNOT ADD INFO: '.$this->conn->error);
            }else{
                // header('Location:../views/login.php');
                return 1;
            }
        }

        public function skipDetails(){
            header ('Location:../views/login.php');
        }

        public function login($email, $password){
            // $sqlResult = $this->conn->prepare('SELECT * FROM accounts WHERE email =? AND password=?');
            // $sqlResult->bind_param('ss',$email,$password);

            // $sqlResult->execute();
            // // $sqlResult->store_result();
            // $sqlResult->bind_result($id,$email,$password,$status);
            // if ($sqlResult->fetch()) {
            //     return TRUE;
            // } else {
            //     return false;
            // }
            $sql = "SELECT * FROM accounts WHERE email='$email' AND password='$password'";
            $result = $this->conn->query($sql);
            if($result->num_rows==1){
                return $result->fetch_assoc();
                // $_SESSION['user_id'] = $user['id'];
                // return TRUE;
            }else{
                return FALSE;
            }
        }

        public function getRandomUserData(){

            $sql = "SELECT * FROM users";
            $result = $this->conn->query($sql);
            $loggedInUserID = $_SESSION['user_id'];
            $loggedInUser = $this->getOneUser($loggedInUserID);
            $gender = $loggedInUser['gender'];
            $likeGender = $loggedInUser['like_gender'];
            while($oneUserData = $result->fetch_assoc()){
                // put only the gender you like excluding yourself into the array
                if($oneUserData['gender'] == $likeGender && $oneUserData['like_gender'] == $gender && $oneUserData['user_id'] != $loggedInUserID){
                    $allIDArray[] = $oneUserData['user_id'];
                }
            }
            //  from the array one is chosen randomly
            $randUserKey = array_rand($allIDArray);
            $randUserID = $allIDArray[$randUserKey];
            $_SESSION['selected_id'] = $randUserID;
            if($randUserID > 0){
                $displayUser = $this->getOneLIke($randUserID,$likeGender);
                return $displayUser;
            }else{
                return FALSE;
            }
        }
        public function getOneUser($userID){
            $sql = "SELECT * FROM users WHERE user_id = $userID";
            $result = $this->conn->query($sql);
            if($result->num_rows == 1){
                return $result->fetch_assoc();
            }else{
                die("No record Found: ".$this->conn->error);
            }
        }
        public function getOneLike($userID,$likeGender){
            $sql = "SELECT * FROM users WHERE user_id = '$userID' AND gender = '$likeGender'";
            $result = $this->conn->query($sql);
            if($result->num_rows == 1){
                return $result->fetch_assoc();
            }else{
                echo 'No User Found';
            }
        }
        public function editUser($address,$likeGender,$job,$school,$hobby,$pic,$userID){
            $sql = "UPDATE users SET address='$address',like_gender='$likeGender',job='$job',school='$school',hobby='$hobby',user_image1='$pic' WHERE user_id = '$userID'";
            $result = $this->conn->query($sql);

            if($result == FALSE){
                echo  'CANNOT EDIT PROFILE'. $this->conn->error;
            }else{
                return TRUE;
            }
        }
        public function deleteUser($userID){
            $sql = "DELETE users,accounts FROM users JOIN accounts ON users.user_id = accounts.id WHERE user_id = '$userID'";
            $result = $this->conn->query($sql);
            if($result == FALSE){
                echo 'CANNOT DELETE ACCOUNT'. $this->conn->error;
            }else{
                header('Location:../views/index.php');
            }
        }

    }
?>