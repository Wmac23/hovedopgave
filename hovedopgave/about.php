<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>eksamen</title>
  <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Concert+One&family=Press+Start+2P&family=Rubik:wght@300;600&display=swap"
    rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-transparent ">
    <div class="container-fluid">
      <a class="navbar-brand " href="index.php"><img src="img/logo1.png" alt="" height="40"></a>
      <div class="green">MAD&SU</div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link" aria-current="page" href="index.php">Forside</a>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="morgenmad.php" id="navbarDropdown" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Opskrifter
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="morgenmad.php">Morgenmad</a></li>
              <li><a class="dropdown-item" href="frokost.php">Frokost</a></li>
              <li><a class="dropdown-item" href="aftensmad.php">Aftensmad</a></li>
              <li><a class="dropdown-item" href="dessert.php">Dessert</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="morgenmad.php" id="navbarDropdown" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Opret
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="new_mor.php">Morgenmad</a></li>
              <li><a class="dropdown-item" href="new_fro.php">Frokost</a></li>
              <li><a class="dropdown-item" href="new_aft.php">Aftensmad</a></li>
              <li><a class="dropdown-item" href="new_des.php">Dessert</a></li>
            </ul>
          </li>
          <a class="nav-link menu active" href="about.php">Om os</a>
          <a class="nav-link menu " href="contact.php">Kontakt os</a>
          <a class="nav-link menu" href="logout.php">Log ud</a>
        </div>
      </div>
    </div>
  </nav>


  <br> <br> <br>
  <div class="container">
    <h1 class="intro">Omkring <br> VoresMad</h1>
    <br> <br>
    <div class="omkring">
      <h2>Vores ambitioner</h2>
      <p class="black">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultricies, libero eget ultrices
        luctus, dolor urna tincidunt purus, vitae euismod purus orci et turpis. Duis consectetur est at magna
        ullamcorper lacinia. Etiam vestibulum rutrum aliquam. Curabitur scelerisque, mi nec tristique finibus, tortor
        dolor tincidunt nisl, ac tincidunt enim augue sit amet ante. Quisque non tempor leo. Praesent faucibus nisl sit
        amet tortor faucibus, vel imperdiet velit ullamcorper. Sed lacinia, nulla facilisis hendrerit lobortis, sapien
        ex consectetur augue, sed vestibulum elit felis quis magna. Aliquam hendrerit nec enim quis eleifend. Praesent
        congue nulla est, vestibulum imperdiet ex eleifend non.
        <br> <br> Aenean non tellus mauris. Praesent nisi erat, imperdiet eget ipsum et, convallis elementum urna. Donec
        vel sem sit amet ex porta posuere. Mauris maximus placerat sodales. Curabitur fermentum mi at elit aliquet,
        vitae convallis nulla volutpat. Integer vel neque sit amet enim scelerisque gravida. Proin ultrices risus orci,
        ut mattis libero convallis quis. Cras nec interdum ligula. Fusce malesuada felis pharetra justo lacinia, in
        egestas nunc laoreet. Nullam hendrerit felis sit amet pellentesque suscipit. Integer porta tincidunt lectus,
        quis tempus felis finibus non. Curabitur ornare consequat pharetra. </p>
      <br><br>

      <h2>Hvem er vi</h2>
      <p class="black">Proin sollicitudin maximus neque, ac aliquam ligula vestibulum rutrum. Vestibulum a justo tellus.
        Curabitur ipsum neque, fermentum sit amet tellus quis, venenatis suscipit nulla. In congue urna in vestibulum
        convallis. Sed at sagittis tortor. Quisque id nisi feugiat, elementum nunc quis, consequat quam. Vivamus
        condimentum lorem ac feugiat eleifend. Donec viverra ante posuere interdum rhoncus. Proin tincidunt ullamcorper
        nisi, id iaculis lectus sodales molestie. Sed sed tempor odio. Aenean non tellus mauris. Praesent nisi erat,
        imperdiet eget ipsum et, convallis elementum urna.</p>
    </div>
    <br> <br> <br> <br> <br> <br> <br> <br> <br>


    <div class="footer-basic">
      <footer>

        <ul class="list-inline">
          <li class="list-inline-item"><a href="index.php">Forside</a></li>
          <li class="list-inline-item"><a href="morgenmad.php">Opskrifter</a></li>
          <li class="list-inline-item"><a href="about.php">Om os</a></li>
          <li class="list-inline-item"><a href="contact.php">Kontakt os</a></li>
        </ul>
        <p class="copyright">Mad&SU © 2022</p>
      </footer>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>

</body>

</html>