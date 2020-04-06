<?php
    require_once "Database.php";
    class User extends Database{

        public function createAccount($username,$email,$password){
            $sql = "INSERT INTO accounts(username,email,password)VALUES('$username','$email','$password')";
            $result = $this->conn->query($sql);

            if($result == false){
                die('CANNOT ADD USER: '.$this->conn->error);
            }else{
                header("location:../views/login.php");
            }
        }
        // public function checkDuplicateAccount($email){
        //     $sql = "SELECT COUNT(*) AS cnt FROM accounts WHERE email='$email' " ;
        //     $result = $this->conn->query($sql);
                // echo $result;
        //     if($result > 0){
        //         return TRUE;
        //     }else{
        //         return FALSE;
        //     }
        // }
        public function login($username, $password){
            $sqlResult = $this->conn->prepare('SELECT * FROM accounts WHERE username =? AND password=?');
            $sqlResult->bind_param('ss',$username,$password);

            $sqlResult->execute();
            // $sqlResult->store_result();
            $sqlResult->bind_result($id,$username,$email,$password,$status);
            if ($sqlResult->fetch()) {
                return TRUE;
            } else {
                return false;
            }
        }
    }
?>