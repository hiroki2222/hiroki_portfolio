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
                    $sql = "SELECT LAST_INSERT_ID()";
                    $result = $this->conn->query($sql);
                    $userIDArray = $result->fetch_assoc();
                    // print_r($userIDArray);
                    $userID = $userIDArray['LAST_INSERT_ID()'];
                    header("location:../views/addMoreInfo.php?user_id=$userID");
                }
            }

        public function addDetails($address,$age,$gender,$likeGender,$job,$school,$hobby,$userID){
            $sql = "UPDATE users SET address = '$address', age ='$age',gender = '$gender', like_gender='$likeGender', job = '$job', school = '$school', hobby = '$hobby' WHERE user_id = '$userID'";
            $result = $this->conn->query($sql);
            if($result == FALSE){
                die('CANNOT ADD INFO: '.$this->conn->error);
            }else{
                header('Location:../views/login.php');
                return TRUE;
            }
        }

        public function skipDetails(){
            header ('Location:../views/login.php');
        }

        public function login($email, $password){
            $sqlResult = $this->conn->prepare('SELECT * FROM accounts WHERE email =? AND password=?');
            $sqlResult->bind_param('ss',$email,$password);

            $sqlResult->execute();
            // $sqlResult->store_result();
            $sqlResult->bind_result($id,$email,$password,$status);
            if ($sqlResult->fetch()) {
                return TRUE;
            } else {
                return false;
            }
        }

        public function showPic(){

        }

        // public function uploadPhoto($pic){
        //     $sql = "UPDATE users SET user_image1 = '$pic'";
        //     $result = $this->conn->query($sql);

        //     if($result){
        //         return 1;
        //     }else{
        //         echo "NOT SAVED ".$this->conn->error;
        //         return 0;
        //     }
        // }
    }
?>