<?php
  include '../action/matchAction.php';
  include '../action/userAction.php';
  $userID = $_SESSION['user_id'];
  // echo $userID;
  // $matchUsers = 
  $allMatchedID = $match->getAllMatchedID($userID);
  foreach($allMatchedID as $eachID){
    $matchUsers[] = $user->getOneUser($eachID);
  }
  
  // print_r($a);
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
              
              <?php foreach($matchUsers as $matchUser): ?>
                <div class="col-4">
                  <a href="matchProfile.php?user_id=<?php echo $matchUser['user_id']?>">
                    <div class="col-md-4 col-sm-2 col-xs-1">
                        <img src="../upload/<?php echo $matchUser['user_image1']?>" alt="" style="height:200px; width:200px;">
                        <p><?php echo $matchUser['username']; ?></p>
                    </div>
                  </a>
                </div>
              <?php endforeach; ?>
              
          </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>