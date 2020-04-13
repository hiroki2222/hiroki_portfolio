<?php
    include '../action/likeAction.php';
    include '../action/userAction.php';
    $userID = $_SESSION['user_id'];
    $loggedInUser = $user->getOneUser($userID);
    $username = $loggedInUser['username'];
    $age = $loggedInUser['age'];
    $address = $loggedInUser['address'];
    $gender = $loggedInUser['gender'];
    $likeGender = $loggedInUser['like_gender'];
    $job = $loggedInUser['job'];
    $school = $loggedInUser['school'];
    $hobby = $loggedInUser['hobby'];
    $pic = $loggedInUser['user_image1'];

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="container-fluid">
        <div class="row">
          <div class="col-8">
            <h1 class="display-4"><a href="dashboard.php">(site title)</a></h1>
          </div>
          <div class="col-4">
            <div class="float-right">
              <a href="profile.php?user_id=<?php echo $userID ?>" class="">
                <i class="fas fa-user fa-5x" style="color: pink;"></i>
              </a>
              <a href="seeAllMatches.php?user_id=<?php echo $userID ?>" class="">
                <i class="fas fa-heart fa-5x" style="color: pink;"></i>
            </a>
              <a href="" class="">
                <i class="fas fa-envelope fa-5x" style="color: pink;"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
  <div class="container">
        <div class="card mt-5">
          <div class="card-body">
            <!-- TO DO: show a pic which is selected randomly from database -->
            <!-- <img src="../img/ninja.png" alt="" class="d-block mx-auto"> -->
            <div >
              <img src="../upload/<?php echo $pic ?>" alt="" class="d-block mx-auto" style="height:400px; width:400px;">
              <form action="" method="post" enctype="multipart/form-data">
                <input type="file" name="pic" id="" class="text-center mx-auto d-block">
                 <br>
                <button class="btn btn-primary mx-auto d-block" name="update_photo">update the photo</button>
              </form>
              <br>
                <div class="col-12" style="">
                  name:<?php echo $username?>
                </div>
                <div class="col-12">
                  age:<?php echo $age ?>
              </div>
              <div class="col-12">
                address:<?php echo $address ?>
            </div>
            
                <div class="col-12">
                  job:<?php echo $job ?>
                </div>
                <div class="col-12">
                  school:<?php echo $school ?>
                </div>
                <div class="col-12">
                  hobby:<?php echo $hobby ?>
                </div>
            </div>
          </div>
          <div class="card-footer">
              <a href="editProfile.php" class="btn btn-block">Edit Info</a>
              <hr>
              <a href="logout.php" class="btn btn-block">Logout</a>
              <hr>
              <a href="deleteUser.php" class="btn btn-block">Delete Account</a>
          </div>
        </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>