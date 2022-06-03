<?php
include_once('./consultation.php');
?>

<?php
$data = selectAll();
if (isset($_POST['valider'])) {

    $id = $_POST['id'];
    $idmedecin = $_POST['idmedecin'];
    $codepatient = $_POST['codepatient'];
    $poids = $_POST['poids'];
    $hauteur = $_POST['hauteur'];
    $diagnostique = $_POST['diagnostique'];
    $date_consultation = $_POST['date_consultation'];
   

   $r =  insert($id,$idmedecin,$codepatient,$poids,$hauteur,$diagnostique,$date_consultation);
   $data = selectAll();
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styl.css">
    <title>CONSULTATION</title>
</head>
<body id='consultation'>

  
<nav class="navbar navbar-dark bg-primary">
        <ul class="nav justify-content-center" style="text-align: center;">
        <li style="margin-right: 280px; color: white;" class="nav-item">
                <h4>Hopital la Belle Verretienne</h4>
            </li>
            <li class="nav-item">
                <a class="nav-link active" style="color: black;" aria-current="page" href="index.php">Acceuil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: black;" href="recherche_patient.php">Rechercher un patient</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: black;" href="list_consultation.php">Liste consultation</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"  style="color: black;" href="list_medecin.php" >Liste Medecin</a>
            </li>
        </ul>
    </nav>

    <div  class="box-grid centered" style=" height: 520px;">
      
      <h1 style="margin-top: 10px;  text-align: center; color: rgba(7, 7, 7, 0.699);">Entre les informations de la consultation</h1>
          <div class="center-box" style=" height: 100px; width: 500px;text-align: center;margin-left: 420px;">
             <form action =" " method="post">
              <div style="margin-top: 25px;" class="form-group">
                <input name ="id" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter ID">
                <input name ="idmedecin" type="number" style="margin-top: 5px;" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter idmedecin" required>
                <input name ="codepatient" style="margin-top: 5px;" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter codepatient" required>
                <input name ="poids" style="margin-top: 5px;" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter poids" required>
                <input name ="hauteur" style="margin-top: 5px;" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter hauteur" required>
                <input name="diagnostique" style="margin-top: 5px;" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter le diagnostique du medecin" required>
                <input type="date" name="date_consultation" style="margin-top: 5px;" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter la date_consultation" required>
              </div>
              
              <button style="margin-top: 10px;" type="submit" name = "valider" class="btn btn-primary">Enregistrer</button>
            </form>
          </div>
        </div>
</body>
</html>

   


