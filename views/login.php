<!doctype html>
<html lang="en">
  <head>
    <title>LOGIN</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
          <div class="card mx-auto w-50 my-5 border border-0">
              <div class="card-header bg-white text-dark border-0">
                  <h2 class="text-center">LOGIN</h2>
              </div>
              <div class="card-body">
                  <form action="../action/userAction.php" method="post">
                      <div class="form-row">
                          <div class="form-group col-md-12 mb-4">
                              <input type="text" name="username" id="" class="p-4 form-control" placeholder="USERNAME">
                          </div>
                          <div class="form-group col-md-12 mb-4">
                              <input type="password" name="password" id="" class="p-4 form-control" placeholder="PASSWORD">
                          </div>
                          <div class="form-group col-md-12 mb-4">
                              <button type="submit" class="btn btn-dark form-control text-uppercase" name="login">Login</button>
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