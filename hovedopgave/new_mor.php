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
 
  <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
  <script src="main.js?v=<?php echo time(); ?>" defer></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Concert+One&family=Press+Start+2P&family=Rubik:wght@300;600&display=swap"
    rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 <title>eksamen</title>
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
            <a class="nav-link  dropdown-toggle" href="morgenmad.php" id="navbarDropdown" role="button"
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
            <a class="nav-link active dropdown-toggle" href="morgenmad.php" id="navbarDropdown" role="button"
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
          <a class="nav-link menu " href="about.php">Om os</a>
          <a class="nav-link menu " href="contact.php">Kontakt os</a>
          <a class="nav-link menu" href="logout.php">Log ud</a>
        </div>
      </div>
    </div>
  </nav>

  <br> <br>
  <div class="container card">
    <h2 class="intro">Opret morgenmad opskrift</h2>

    <div class="row justify-content-center">

      <?php require_once 'connection.php';?>


      <form action="new_mor.php" method="POST">

        <label for="">Titel</label>
        <input placeholder="Titel på retten" type="text" name="titel" class="form-control" value="" required>

        <label for="">Opskrift</label>
        <input placeholder="Forklar opskrift" type="text" name="vejled" class="form-control" value="" required>

        <label for="quantity">Pris</label>
        <input placeholder="Pris" type="number" name="penge" class="form-control" value="" min="1" max="1000" required>

        <label for="quantity">Tid</label>
        <input placeholder="Hvor mange minutter" type="number" name="tid" class="form-control" value="" min="1"
          max="1000" required>

        <label for="quantity">Personer</label>
        <input placeholder="Antal personer" type="number" name="personer" class="form-control" value="" min="1" max="10"
          required>

        <br>
        <button type="Submit" name="save1" onclick="opskrift()">Submit </button>


      </form>
    </div>
  </div>

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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>
</body>

</html>