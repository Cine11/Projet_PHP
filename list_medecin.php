<?php
include_once('./medecin.php');
?>

<?php
$data = selectAll();
if (isset($_POST['valider'])) {

    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $sexe = $_POST['sexe'];
    $tel = $_POST['tel'];
    $adresse = $_POST['adresse'];
    $email = $_POST['email'];
    $specialite = $_POST['specialite'];

   $r =  insert($id,$nom,$prenom,$sexe,$tel,$adresse,$email,$specialite);
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
    <title>Liste des consultation</title>
</head>
<body>


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


<center><h1 style=color:blue>LISTE DES MEDECINS</h1></center><br><br>

    <table class="table table-striped">
        <thead>
            <th>Id</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Sexe</th>
            <th>Tel</th>
            <th>Adresse</th>
            <th>Email</th>
            <th>Specialite</th>
        
        </thead>
        <tbody>
            <?php if (count($data) != 0) {
                $c =0;
                foreach ($data as $l) {
                    $c++;
            ?>
                    <tr>
                        <td>
                            <?php echo $c; ?>
                        </td>
                        <td>
                            <?php echo $l['nom']; ?>
                        </td>

                        <td>
                            <?php echo $l['prenom']; ?>
                        </td>

                        <td>
                            <?php echo $l['sexe']; ?>
                        </td>

                        <td>
                            <?php echo $l['tel']; ?>
                        </td>

                        <td>
                            <?php echo $l['adresse']; ?>
                        </td>

                        <td>
                            <?php echo $l['email']; ?>
                        </td>

                        <td>
                            <?php echo $l['specialite']; ?>
                        </td>
                       
                    </tr>
            <?php }
            } ?>
        </tbody>
    </table>
</div>


<?php
include_once('./foot.php')
?>