<?php
    require_once "Database.php";
    class User extends Database{

        public function createAccount($username,$email,$password){
            $firstSql = "SELECT COUNT(*) FROM accounts WHERE email='$email' " ;
            $firstResult = $this->conn->query($firstSql);

            
            //to do - make it can't log in if the same email address is already registered
            if($firstResult->num_rows == 0){
                $secondSql = "INSERT INTO accounts(username,email,password)VALUES('$username','$email','$password')";
                $secondResult = $this->conn->query($secondSql);

                if($secondResult == FALSE){
                    die('CANNOT ADD USER: '.$this->conn->error);
                }else{
                    header("location:../views/login.php");
                }
            }
            // else{
            //     return FALSE;
            // }
        }
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