<?php
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <!-- CSS -->
  <link rel="stylesheet" href="/index.css">
  <!-- Aos cdn  -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <!-- font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300&family=Work+Sans:wght@300&display=swap" rel="stylesheet">
  <title><?= $title; ?></title>
  <?php
  if ($activePage == 'home') {
    echo '<style>
    footer {
      position: absolute;
      bottom: 0;
      width: 100%;
      height: 160px;
    }
    </style>';
  } else {
    echo '<style>
    footer {
      position: fixed;
      bottom: 0;
      width: 100%;
    }
    </style>';
  }
  ?>
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="home1">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">ORVBA</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link <?= $activePage == 'home' ? 'active' : ''; ?>" aria-current="page" href="/index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= $activePage == 'services' ? 'active' : ''; ?>" href="/services.php">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= $activePage == 'contact' ? 'active' : ''; ?>" href="contact.php">Contact Us</a>
          </li>
          <?php
          if (isLoggedIn()) {
          ?>
          <li class="nav-item">
            <a class="nav-link <?= $activePage == 'login' ? 'active' : ''; ?>" href="user-login.php"><?= $_SESSION['name']; ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= $activePage == 'assistance' ? 'active' : ''; ?>" href="assistance.php">Need Assistance?</a>
          </li>
          <?php
          } else {
          ?>
          <li class="nav-item">
            <a class="nav-link <?= $activePage == 'login' ? 'active' : ''; ?>" href="user-login.php">Login</a>
          </li>
          <?php
          }
          ?>
          ?>
        </ul>
      </div>
    </div>
  </nav>
