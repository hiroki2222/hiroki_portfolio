<?php
    include '../action/likeAction.php';
    include '../action/userAction.php';
    $userID = $_SESSION['user_id'];
    $loggedInUser = $user->getOneUser($userID);
    $age = $loggedInUser['age'];
    $gender = $loggedInUser['gender'];
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
          <div class="card mx-auto w-50 my-5 border border-0">
              <div class="card-header bg-white text-dark border-0">
                  <h2 class="text-center">Edit Info</h2>
              </div>
              <div class="card-body">
                  <form action="" method="post" enctype="multipart/form-data">
                      <div class="form-row">
                            <div class="form-group col-md-12 mb-4">
                                <select name="address" id="address" class="w-100 form-control">
                                    <option value="" selected disabled  class="form-control">Address</option>
                                    <option value="japan">Japan</option>
                                    <option value="overseas">Overseas</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12 mb-4">
                                <select name="like" id="" class="w-100 form-control">
                                  <?php if($gender == 'm'): ?>
                                    <option value="m" selected>Male</option>
                                    <option value="f">Female</option>
                                  <?php elseif($gender == 'f'): ?>
                                    <option value="m">Male</option>
                                    <option value="f" selected>Female</option>
                                  <?php endif;?>
                                </select>
                            </div>
                            <div class="form-group col-md-12 mb-4">
                              <input type="text" name="job" id="job" class="p-4 form-control" placeholder="job" value="<?php echo $job?>">
                            </div>
                            <div class="form-group col-md-12 mb-4">
                              <input type="text" name="school" id="school" class="p-4 form-control" placeholder="school"  value="<?php echo $school?>">
                            </div>
                            <div class="form-group col-md-12 mb-4">
                              <input type="text" name="hobby" id="" class="p-4 form-control" placeholder="Your Hobby" value="<?php echo $hobby?>">
                            </div>
                        <br>
                        <div class="form-group col-md-12 mb-4">
                        <img src="../upload/<?php echo $pic?>" alt="" class="d-block mx-auto" style="height:400px; width:400px;">
                          <input type="file" name="pic" id="" class="form-control">
                        </div>
                        <br>
                        <div class="form-group col-md-12 mb-4">
                        </div>
                        <br>
                        <div class="form-group col-md-12">
                              <button type="submit" class="btn btn-dark form-control text-uppercase" name="edit">Edit</button>
                        </div>
                      </div>
                  </form>
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