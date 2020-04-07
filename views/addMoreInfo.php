<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/eb83b1af77.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
          <div class="card mx-auto w-50 my-5 border border-0">
              <div class="card-header bg-white text-dark border-0">
                  <h2 class="text-center">Add More Info</h2>
              </div>
              <div class="card-body">
                  <form action="../action/userAction.php" method="post">
                      <div class="form-row">
                            <div class="form-group col-md-12 mb-4">
                                <select name="address" id="address" class="w-100">
                                    <option value="" selected disabled  class="form-control">Address</option>
                                    <option value="male">Japan</option>
                                    <option value="male">Overseas</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12 mb-4">
                              <input type="number" name="age" id="age" class="p-4 form-control" placeholder="age">
                            </div>
                            <div class="form-group col-md-12 mb-4">
                                <select name="gender" id="" class="w-100">
                                    <option value="" selected disabled  class="form-control">Gender</option>
                                    <option value="male">Male</option>
                                    <option value="male">Female</option>
                                    <option value="male">Others</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12 mb-4">
                                <select name="like" id="" class="w-100">
                                    <option value="" selected disabled  class="form-control">Like</option>
                                    <option value="male">Male</option>
                                    <option value="male">Female</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12 mb-4">
                              <input type="text" name="job" id="job" class="p-4 form-control" placeholder="job">
                            </div>
                            <div class="form-group col-md-12 mb-4">
                              <input type="text" name="school" id="school" class="p-4 form-control" placeholder="school">
                            </div>
                            <div class="form-group col-md-12 mb-4">
                              <input type="text" name="username" id="" class="p-4 form-control" placeholder="Your Hobby">
                              <a data-toggle="collapse" href="#oneMoreHobby" aria-expanded="false" aria-controls="oneMoreHobby">
                              <i class="fas fa-plus-circle"></i>
                            </a>Add More Hobbies
                            </div>
                        <br>
                        <div class="form-group col-md-12 mb-4 collapse" class="" id="oneMoreHobby">
                              <input type="text" name="one_more_hobby" id="" class="p-4 form-control" placeholder="Your Hobby">
                        </div>
                        <div class="form-group col-md-12 mb-4 collapse" class="" id="">
                          <input type="file" name="image" size="35">
                        </div>
                        <div class="form-group col-md-12 mb-4">
                              <button type="submit" class="btn btn-dark form-control text-uppercase" name="login">Add</button>
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