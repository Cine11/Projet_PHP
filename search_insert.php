
<?php
include_once('./fonc_search.php');
?>

<?php
$data = selectAll();
if (isset($_POST['valider'])) {

    $code = $_POST['code'];

   $r =  select($code);
   $data = selectAll();
}
?>









<!Doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Hopital Marie Curie</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="Asset/bootstrap-5.0.0-beta3-dist/bootstrap-5.0.0-beta3-dist/css/bootstrap.min.css">
<link href="Asset/Css/index.css" rel="stylesheet" type="text/css">
<script src="Asset/bootstrap-5.0.0-beta3-dist/bootstrap-5.0.0-beta3-dist/js/bootstrap.min.js"></script>
<link rel="shortcut icon" href="Asset/Image/exp_logo_16290_fr_2019_05_14_13_59_51.webp" type="image/x-icon">

</head>

<body> 
  <!-- utilisation de la classe bootstrap "fixed-top header" pour maintenir la section header en avant de page -->
	 <header id="header" class="fixed-top header">
			<h1 class="univ-name">
        <p id="Titre"><a href="index.php">Hopital Marie Curie</a> </p>
      </h1>
          <nav id="nav">
            <ul>
              
              <li style="margin-top: 250px; margin-bottom: 300px;" >
                <form  action = "ui_search.php" method = "post" class="form-inline my-2 my-lg-0">
                    <input name = "input_search" style="margin-bottom: 10px; text-align: center;" class="form-control mr-sm-2" type="search" placeholder="Search">
                    <button  name = "search_patient" class="btn btn-success">Rechercher Patient</button>
                      
                </form>
              </li>
            
			      </ul>
          </nav>
  </header>
  <!-- utilisation des carousel de bootstrap -->
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="Asset/Image/hopital1.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="Asset/Image/hopital2.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="Asset/Image/hopital3.jpg" alt="Second slide">
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>


