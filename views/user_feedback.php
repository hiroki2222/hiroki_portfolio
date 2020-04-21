<?php
    include '../action/contactAction.php';
    $allContacts = $contact->getAllContacts();
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
    <link rel="stylesheet" href="../css/admin.css">
  </head>
  <body>
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
          <a class="nav_letters nav_page_letter" href="dashboard.php">About Us
                <span class="sr-only">(current)</span>
              </a>
        </li>
        <li class="nav-item mr-5">
          <a class="nav_letters nav_page_letter" href="profile.php">Contact</a>
        </li>
        <li class="nav-item mr-5">
          <a class="nav_letters nav_page_letter" href="seeAllMatches.php">Language</a>
        </li>
        <li class="nav-item">
          <a class="nav_letters nav_page_letter" href="contact.php">Jobs</a>
        </li>
      </ul>
    </div>
</nav>
<div class="container-fluid">
    <table class="mx-auto table-bordered table-striped mt-5 table-hover w-75">
        <thead>
            <tr>
                <th>MessageID</th>
                <th>UserID</th>
                <th>ReportedID</th>
                <th>Category</th>
                <th>Subject</th>
                <th>Message</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($allContacts as $eachContact):
            ?>
            
            <tr>
                <td><?php echo $eachContact['contact_id']?></td>
                <td><?php echo $eachContact['user_id'] ?></td>
                <td><?php echo $eachContact['reported_id'] ?></td>
                <td><?php echo $eachContact['category'] ?></td>
                <td><?php echo $eachContact['title'] ?></td>
                <td><?php echo $eachContact['content']?></td>
            </tr>
            <?php
                endforeach;
            ?>
        </tbody>
    </table>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>