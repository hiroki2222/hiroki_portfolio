<?php
    include '../action/likeAction.php';
    include '../action/userAction.php';
    include '../action/matchAction.php';
    include '../action/messageAction.php';  
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
    $userMessage = $loggedInUser['profile_comment'];

    $allMatchedID = $match->getAllMatchedID($userID);
    if($allMatchedID){
      foreach($allMatchedID as $eachID){
        $matchUsers[] = $user->getOneUser($eachID);
      }
      $messageArray = array();
      $textTimeArray = array();
      $messageValueArray = array();
      foreach($matchUsers as $matchUser){
        $matchUserID = $matchUser['user_id'];
        $latestMessages = $message->getTheLatestMessage($userID,$matchUserID);
        // print_r($latestMessages);
        if($latestMessages){
          array_push($textTimeArray,$latestMessages['created_at']);
          // array_push($messageTextArray,$latestMessages['m.textmessage']);
          // array_push($messageUserArray,$latestMessages['u.username']);
          // array_push($messageImgArray,$latestMessages['u.user_image1']);
          $messageValueArray[] = array(
                                      'user_id1' => $latestMessages['user_id'],
                                      'user_id2' => $latestMessages['received_user_id'],
                                      'content' => $latestMessages['textmessage'],
          );
        }
      }
      $messageArray = array_combine($textTimeArray,$messageValueArray);
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="js/main.js"></script>
    <script>
      // 画面高さ取得jquery
      $(document).ready(function () {

        hsize = $(window).outerHeight(true);
        navheight = $("#navheight").outerHeight(true);
        main_height = $("#main_height").outerHeight(true);
        console.log(hsize);
        console.log(navheight);
        console.log(main_height);
        $("#sidebar").css("height", hsize-navheight + "px");
        // $("#main_height").css("height", hsize-navheight + "px");

      });

      $(window).resize(function () {

        hsize = $(window).height();

        $("#sidebar").css("height", hsize + "px");

      });
      // 画面高さ取得終了

    </script>
  </head>
  <body class="">
 
    <!-- メイン画面 container-fluid開始-->
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
      <div class="container-fluid p-0 overflow-hidden">
      



        <!-- メイン画面row -->
        <div class="row m-0" id="main_height">
          <!-- メイン画面col2分割 -->
            <div class="col-2 d-md-block d-none" id="sidebar">
            <!-- tab -->
              <ul class="nav nav-tabs">
                <!-- <div class="row">
                  <div class="col-6"> -->
                    <li class="active nav-item"><a href="#matches" data-toggle="tab" class="nav-link tabname">MATCHES</a></li>
                  <!-- </div> -->
                  <!-- <div class="col-6"> -->
                      <li class="nav-item"><a href="#messages" data-toggle="tab" class="nav-link tabname">MESSAGES</a></li>
                  <!-- </div>
                </div> -->
              </ul>
            <!-- tab 終了 -->
            <!-- tab content -->
              <div class="tab-content">
                <!-- matches tab-pane開始 -->
                <div class="tab-pane active" id="matches">
                  <div class="row">
                    <?php foreach($matchUsers as $matchUser): ?>
                      <div class="col-md-6 col-sm-12 m-0 p-1">
                        <a href="matchProfile.php?user_id=<?php echo $matchUser['user_id'] ?>">
                          <img src="../upload/<?php echo $matchUser['user_image1']?>" alt="" style="height:100%; width:100%;margin:0px; padding:0px;">
                        </a>
                      </div>
                    <?php endforeach; ?>
                  </div>
                </div>
                <!-- matches tab-pane終 -->
                <!-- message tab-pane -->
                <div class="tab-pane" id="messages">
                    
                      <?php 
                      krsort($messageArray);
                      foreach ($messageArray as $key => $eachMessage):
                      $messageUserID1 = $eachMessage['user_id1'];
                      $messageUserID2 = $eachMessage['user_id2'];
                      if($messageUserID1 == $userID){
                        $messageUserID = $messageUserID2;
                      }else{
                        $messageUserID = $messageUserID1;
                      }
                      $messageUser = $user->getOneUser($messageUserID);
                      ?>
                        <a href="direct_message.php?user_id=<?php echo $messageUser['user_id'] ?>">
                        <div class="row">
                          <div class="col-3">
                            <img src="../upload/<?php echo $messageUser['user_image1'] ?>" alt="" style="height:80px; width:60px;">
                          </div>
                          <div class="col-8 offset-1">
                            <span class="message_user text-break"><?php echo $messageUser['username']; ?></span>
                            <br>
                            <?php 
                              if($eachMessage['user_id1'] == $userID):
                            ?>
                            <i class="fas fa-undo-alt"></i>
                            <?php endif; ?>
                            <?php echo $eachMessage['content']; ?>
                          </div>
                        </div>
                        </a>
                      <?php endforeach?>
      
                </div>
              </div>
              <!-- tab content 終了 -->
            </div>
              
          <!-- ↑メイン画面col2分割終了 -->
          <!-- ↓メイン画面col10分割開始 -->
          <div class="col-md-10 col-sm-12 main_bg_color p-0">
          
            

<!-- profile -->
    <div class="mx-auto mt-5 bg-white border w-50">
        <div class="row">
            <div class="col-md-6 col-sm-12" style="width:300px;">
              <div class="img_box">
                <img src="../upload/<?php echo $pic ?>" alt="" class="profile_pic img-fluid">
              </div>
            </div>
            <div class="col-md-6 col-sm-12">
            <div class="row mt-2">
                  <div class="col-md-6 col-sm-12">
                    <p class="info text-center font-weight-bold"><?php echo $username ?></p>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <p class="info text-center font-weight-bold">age:<?php echo $age ?></p>
                </div>
              </div>
              <div class="row profile_sec">
                  <div class="col-md-6 col-sm-12">
                    <p class="info text-center"><i class="fas fa-map-marker-alt"></i> <?php echo $address ?></p>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <p class="info text-center"><i class="fas fa-briefcase"></i> <?php echo $job ?></p>
                  </div>
              </div>
              <div class="row profile_sec">
                  <div class="col-md-6 col-sm-12">
                      <p class="info text-center"><i class="fas fa-school"></i> <?php echo $school ?></p>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <p class="info text-center"><i class="fas fa-heart"></i> <?php echo $hobby ?></p>
                  </div>
              </div>
              <div class="row profile_sec">
                  <div class="col-12">
                    <p class="mt-3 info text-break mx-3"><?php echo $userMessage?></p>
                  </div>
              </div>
            </div>
        </div>
    </div>
          
           
                    <div class="row">
                        <div class="col-12">
                          <div class="w-50 mx-auto">
                            <a href="addMoreInfo.php" class="btn btn-block btn-red mt-4 btn-lg">Edit Profile</a>
                          </div>
                        </div>
                    </div>
                
                    <div class="row">
                      <div class="col-12">
                        <div class="w-50 mx-auto">
                          
                          <a href="logout.php" class="btn btn-grey btn-block btn-dark btn-lg mt-4">Log Out</a>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="w-50 mx-auto">
                          <a href="deleteUser.php" class="btn btn-block btn-dark btn-lg mt-4">Delete Account</a>
                        </div>
                      </div>
                    </div>
                      
            <!-- </div> -->
            </div>

            <!-- ↑メイン画面col10分割終了 -->
            </div>
            <!-- メイン画面row終了 -->
          </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>