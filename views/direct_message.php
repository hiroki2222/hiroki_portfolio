<?php
    include '../action/userAction.php';
    include '../action/matchAction.php';
    include '../action/messageAction.php';
    $userID = $_SESSION['user_id'];
    $userID2 = $_GET['user_id'];
    $loggedInUser = $user->getOneUser($userID);
    $username = $loggedInUser['username'];

    $match = $match->seeIfTheyreMatched($userID,$userID2);
    
    if($match == 0):
        header('Location:../views/index.php');
    else:
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
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark static-top nav_design p-0" id="navheight">
          <a class="nav_letters mt-3 ml-2" href="index.php" id="logo">
            theRightOne
          </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto mt-4 text-center" style="font-size: 18px;">
        <li class="nav-item mr-5">
          <a class="nav_letters nav_page_letter" href="dashboard.php"><i class="fas fa-home"></i>Home
                <span class="sr-only">(current)</span>
              </a>
        </li>
        <li class="nav-item mr-5">
          <a class="nav_letters nav_page_letter" href="profile.php"><i class="fas fa-user"></i>Profile</a>
        </li>
        <!-- <li class="nav-item mr-5">
          <a class="nav_letters nav_page_letter" href="seeAllMatches.php"><i class="fas fa-heart"></i>Matches</a>
        </li> -->
        <li class="nav-item mr-5">
          <a class="nav_letters nav_page_letter" href="contact.php"><i class="fas fa-envelope"></i>Contact</a>
        </li>
      </ul>
    </div>
</nav>
  <div class="container-fluid mt-4">
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
    <div class="container w-50">
      <?php
        $messages = $message->getMessages($userID,$userID2);
        if($messages):
          foreach($messages as $eachMessage): ?>

          <div class="row border-bottom pb-2">
            <div class="col-2">
              <div class="img_box">
                <img src="../upload/<?php echo $eachMessage['user_image1']?>" alt="" class="img-fluid profile_pic">
              </div>
            </div>
            <div class="col-6">
              <p class="text-break"><?php echo $eachMessage['textmessage']?></p>
            </div>
            <div class="col-4">
              <p class="float-right"><?php echo $eachMessage['created_at'] ?></p>
            </div>
          </div>
          <br>
          <?php endforeach; ?>
        <?php else: ?>
          <div class="row">
            <div class="col-12 display-4 text-center">Start the Conversation</div>
          </div>
        <?php endif; ?>
      <form action="" method="post">
        <textarea id="" cols="20" rows="4" class="form-control" name="message"></textarea>
        <br>
        <button class="btn btn-red btn-block mb-2" name="send_message">Send</button>
      </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
    <?php endif; ?>