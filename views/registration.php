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

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body class="">
  <div class="container-fluid">
      <div class="display-2 text-center mt-5">
          Registration
      </div>
      <div class="w-50 mx-auto mt-5">
          <!-- <div class="card-body"> -->
              <form action="" method="post" class="mt-5">
                  <div class="form-group display-4 mt-5">
                      <label for="email">username</label>
                      <input type="text" name="username" id="username" class="form-control" placeholder="Enter Username" required>
                  </div>
                  <div class="form-group display-4 mt-5">
                      <label for="email">Email</label>
                      <input type="text" name="email" id="email" class="form-control" placeholder="Enter Email" required>
                        <?php if($_SESSION['duplicate']): ?>
                        <p>the email address already exists</p>
                        <?php endif; ?>
                  </div>
                  <div class="form-group display-4 mt-5">
                      <label for="password">Password</label>
                      <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password" required>
                  </div>
                  <button class="btn btn-block btn-lg mt-5 btn-outline-info" name="register">Register</button>
              </form>
          <!-- </div>    -->
      </div>
        <!-- <div class="card mx-auto w-50 my-5 border border-0" style="background: linear-gradient(-135deg, #E4A972, #9941D8)fixed;">
            <div class="card-header bg-white text-dark border-0" style="background: linear-gradient(-135deg, #E4A972, #9941D8)fixed;">
                <h2 class="text-center">REGISTRATION</h2>
            </div>
            <div class="card-body" style="background: linear-gradient(-135deg, #E4A972, #9941D8)fixed;">
                <form action="../action/userAction.php" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="text" name="username" id="" class="form-control p-4" placeholder="USERNAME" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="password" name="password" id="" class="form-control p-4" placeholder="PASSWORD" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <button type="submit" class="btn btn-danger form-control text-uppercase" name="register">
                                submit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div> -->
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>