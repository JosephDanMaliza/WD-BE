<?php
include('A08/connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&display=swap" rel="stylesheet">
  <title>Portfolio: Joseph</title>
  <link rel="icon" href="assets/imgs/moreImgs/rowletticn.png" type="image/png">

</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">JDAM!</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="projects.html">Projects</a>
          </li>


          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section id="home" class="py-5">
    <div class="container text-center text-md-start">
      <div class="row align-items-center">
        <div class="image col-md-6">
          <img src="assets/moreImgs/mainpic.jpg" alt="Main Picture" class="img-fluid rounded-circle shadow">
        </div>
        <div class="col-md-6">
          <div class="card bg-light shadow p-4">
            <h1 class="mb-4">Welcome to Joseph's Portfolio!</h1>
            <p>Get to know me more by exploring this portfolio of mine. You can also explore my projects and work. Feel free to get in touch!</p>
                <a href="projects.html" class="button">View Projects</a>

          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="about" class="py-5" background-position: center;>
    <div class="container text-center text-white">
      <h2 class="mb-4 display-4 font-weight-bold">About Me</h2>
      <p class="lead mb-4">Hi, I'm <strong>Joseph Daniel A. Maliza</strong>, a student at <strong>Polytechnic University of Sto. Tomas</strong> aiming to learn more and expand my knowledge with technologies. I am passionate about game development, web design, and continuously growing my skills in programming and technology.</p>
      
      <div class="row justify-content-center">
        <div class="col-md-4">
          <div class="card bg-transparent border-light">
            <div class="card-body text-center">
              <h5 class="card-title text-white">Skills</h5>
              <ul class="list-unstyled text-white">
                <li>Game Development</li>
                <li>Web Design & Development</li>
                <li>Java, JavaScript, and Python</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card bg-transparent border-light">
            <div class="card-body text-center">
              <h5 class="card-title text-white">Hobbies</h5>
              <ul class="list-unstyled text-white">
                <li>Video Editing</li>
                <li>Graphic Design</li>
                <li>Learning New Technologies</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  

  <section id="achievements" class="py-5">
    <div class="container">
      <h2 class="text-center mb-5 ">Experiences</h2>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="card bg-dark text-white h-100 p-3">
            <h3>Knowledge with C Programming</h3>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card bg-dark text-white h-100 p-3">
            <h3>Knowledge with C++ Programming</h3>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card bg-dark text-white h-100 p-3">
            <h3>Knowledge with Java Programming</h3>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card bg-dark text-white h-100 p-3">
            <h3>Experienced and has Knowledge with Figma</h3>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card bg-dark text-white h-100 p-3">
            <h3>Experienced and has Knowledge with Canva</h3>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card bg-dark text-white h-100 p-3">
            <h3>Knowledge with Editing Videos</h3>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card bg-dark text-white h-100 p-3">
            <h3>Collaborated with Friends in Creating KuroNeko</h3>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="mt-4">
      <div class="d-flex flex-column justify-content-center align-items-center gap-3">
        <p>© 2024 Joseph Daniel A. Maliza. All Rights Reserved.</p>
        <p>Contact me via:</p>
        <div class="d-flex justify-content-center gap-3">
          <a href="https://github.com/JosephDanMaliza" target="_blank" class="text-white fs-3">
            <i class="fab fa-github"></i>
          </a>
          <a href="https://www.facebook.com/joseph.maliza.35" target="_blank" class="text-white fs-3">
            <i class="fab fa-facebook"></i>
          </a>
          <a href="https://www.instagram.com/__danniloo" target="_blank" class="text-white fs-3">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="https://twitter.com/deynsun_" target="_blank" class="text-white fs-3">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="mailto:josephmaliza55@gmail.com" target="_blank" class="text-white fs-3">
            <i class="fas fa-envelope"></i>
          </a>
        </div>
      </div>
    </div>
  </footer>
  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>