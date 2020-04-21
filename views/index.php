<?php
    include '../action/userAction.php';
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
    <style>
        body{
            background:url("../image/background.jpg") no-repeat center center;
            background-position: center center;

            /* 画像をタイル状に繰り返し表示しない */
            background-repeat: no-repeat;
            
            /* コンテンツの高さが画像の高さより大きい時、動かないように固定 */
            background-attachment: fixed;
            
            /* 表示するコンテナの大きさに基づいて、背景画像を調整 */
            background-size: cover;
            background-color:rgba(255,255,255,0.15);
            background-blend-mode:lighten;
        }
    </style>
  </head>
  <body>
    <!-- <div id="" class="pb-2"> -->
    <nav class="navbar navbar-expand-lg navbar-dark static-top nav_design">
    <a class="mt-3 ml-2 nav_letters" href="#" id="logo">
      theRightOne
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto mt-4" style="font-size: 18px;">
        <li class="nav-item mr-5">
          <a class="nav_letters nav_page_letter" href="">About Us
                <span class="sr-only">(current)</span>
              </a>
        </li>
        <li class="nav-item mr-5">
          <a class="nav_letters nav_page_letter" href="">Contact</a>
        </li>
        <li class="nav-item mr-5">
          <a class="nav_letters nav_page_letter" href="">Language</a>
        </li>
        <li class="nav-item">
          <a class="nav_letters nav_page_letter" href="">Jobs</a>
        </li>
      </ul>
    </div>
</nav>
    <!-- </div> -->
      <div class="container" style="margin-top:200px;">
          <h2 class="text-center display-2 top_message" style="letter-spacing:.06em;">Find the right one.</h2>
      <div class="row" style="margin-top: 100px;">
            <div class="col-md-6 col-sm-12 col-xs-12">
              <a class="btn btn-light btn-lg btn-block w-75 mx-auto text-dark mb-3" style="opacity:.6;" data-toggle="modal" data-target="#registerModal" id="register">Register</a>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <a class="btn btn-lg btn-block mx-auto w-75 top_link btn-light text-dark" style="opacity:.6;" data-toggle="modal" data-target="#loginModal">Login</a>
            </div>
      </div>
      <!-- test -->
    <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document"  style="opacity:.9;">
            <div class="modal-content">
                <div class="modal-header">
                    <h4><div class="modal-title" id="myModalLabel">Register</div></h4>
            </div>  
                <div class="modal-body">
                    <form action="" method="post">
                    <div class="row">
                        <div class="col-8">
                            <input type="text" class="form-control" placeholder="username" name="username">
                        </div>
                        <div class="col-4">
                            <select name="gender" id="" class="form-control">
                                <option value="" selected disabled>gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>
                        <br>
                        <input type="text" class="form-control" placeholder="email" name="email">
                        
                        <br>
                        <input type="password" class="form-control" placeholder="password" name="password">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-red" name="register" data-target="#loginModal" data-toggle="modal">Register</button>
                    </div>
                    </form>
            </div>
        </div>
    </div>
    <?php 
        if(isset($_POST['register'])):
            if($_SESSION['duplicate_error'] == TRUE):?>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="col-md-6 col-sm-12 col-xs-12 w-75 mx-auto">
                        <p class="text-danger font-weight-bold">The email address is already taken</p>
                    </div>
                </div>
            </div>
            
    <?php endif;
        endif; ?>
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document"  style="opacity:.9;">
            <div class="modal-content">
                <div class="modal-header">
                    <h4><div class="modal-title" id="myModalLabel">Login</div></h4>
            </div>  
                <div class="modal-body">
                    <form action="" method="post">
                        <input type="text" class="form-control" placeholder="email" name="email">
                        <br>
                        <input type="password" class="form-control" placeholder="password" name="password">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-red" name="login">Login</button>
                    </div>
                </form>
            </div>
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