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
                $createAccount = "INSERT INTO accounts(username,email,password)VALUES('$username','$email','$password')";
                $createUser = "INSERT INTO users(username)VALUES('$username')";
                $newAccount = $this->conn->query($createAccount);
                $newUser = $this->conn->query($createUser);
                if($newAccount == FALSE || $newUser == FALSE){
                    die('CANNOT ADD USER: '.$this->conn->error);
                }else{
                    header("location:../views/addMoreInfo.php");
                }
            }
        // public function createAccount($email,$password){
        //     $createAccount = "INSERT INTO accounts(email,password)VALUES('$email','$password')";
        //     $createUser = "INSERT INTO users";


            
        //     //to do - make it can't create account if the same email address is already registered
        //     if($resultOfCheck->num_rows > 0){
        //         // return 'alreadyExisted';
        //         return 'f';
        //     }else{
        //         $newAccount = $this->conn->query($createAccount);
        //         $newUser = $this->conn->query($createUser);

        //         if($newAccount == FALSE || $newUser == FALSE){
        //             die('CANNOT ADD USER: '.$this->conn->error);
        //         }else{
        //             header("location:../views/login.php");
        //         }
        //         // return 't';
        //     }
        // }

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
    }
?>