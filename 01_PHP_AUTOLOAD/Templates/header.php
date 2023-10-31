<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
  <link rel="stylesheet" href="./Templates/CSS/main.css">

</head>

<body class="p-3 m-0 border-0 bd-example m-0 border-0">

  <!-- Example Code -->
  <?php 
  if($_GET['page'] !== 'admin_page') { ?>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid d-flex">
      <a class="navbar-brand logo" href="index.php?page=landing">
        <img src="https://i.pinimg.com/736x/bc/52/5f/bc525f0c2612e5f61ef01f8fe274b379.jpg" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php?page=landing">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?page=profile">Profile</a>
          </li>
          <li class="nav-item" style="list-style: none;">
            <a class="nav-link" id="login" href="index.php?page=login">SignIn|SignUp</a>
          </li>
      </div>
      </ul>
    </div>
  </nav>
  <?php 
  }
?>