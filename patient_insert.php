<?php
include_once('./patient.php');
?>
<?php
$data = selectAll();
if (isset($_POST['valider'])) {

    $code = $_POST['code'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $sexe = $_POST['sexe'];
    $tel = $_POST['tel'];
    $adresse = $_POST['adresse'];
    $date_enregistrement = $_POST['date_enregistrement'];
   

   $r =  insert($code,$nom,$prenom,$sexe,$tel,$adresse,$date_enregistrement);
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
    <link rel="stylesheet" href="Asset/Css/new_med.css">
    <link rel="stylesheet" href="styl.css">
    <title>PATIENT</title>
</head>
<body id='patient'>


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
      
      <h1 style="margin-top: 10px;  text-align: center; color: rgba(7, 7, 7, 0.699);">Entre les informations du patient</h1>
          <div class="center-box" style=" height: 100px; width: 500px;text-align: center;margin-left: 420px;">
             <form action =" " method="post">
              <div style="margin-top: 25px;" class="form-group">
                <input name ="code" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter le code du patient" required>
                <input name ="nom" style="margin-top: 5px;" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter le nom du patient" required>
                <input name ="prenom" style="margin-top: 5px;" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter le prenom du patient" required>
                
                <div class="form-group">
                  <label for="inputState" >Sexe</label>
                  <select name ="sexe" id="inputState" class="form-control">
                    <option >Masculin</option>
                    <option >Feminin</option>
                  </select>
              </div>
                

              <input name ="tel" style="margin-top: 5px;" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Phone Number" required>
                <input name ="adresse" style="margin-top: 5px;" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Adresse" required>
                <input type="date" name="date_enregistrement" style="margin-top: 5px;" type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter la date de l'enregistrement" required>
               
              </div>
              
              <button style="margin-top: 10px;" type="submit" name = "valider" class="btn btn-primary">Enregistrer</button>
            </form>
          </div>
        </div>
</body>
</html>

   


