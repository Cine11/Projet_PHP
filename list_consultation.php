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



<h5 style="text-align:center;">La liste des medecin</h5>



    <table class="table table-striped">
        <thead>
            <th>Id</th>
            <th>Id Medecin</th>
            <th>Code Patient</th>
            <th>Poids</th>
            <th>Hauteur</th>
            <th>Diagnostique</th>
            <th>Date de la consultation</th>
            
        
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
                            <?php echo $l['idmedecin']; ?>
                        </td>

                        <td>
                            <?php echo $l['codepatient']; ?>
                        </td>

                        <td>
                            <?php echo $l['poids']; ?>
                        </td>

                        <td>
                            <?php echo $l['hauteur']; ?>
                        </td>

                        <td>
                            <?php echo $l['diagnostique']; ?>
                        </td>

                        <td>
                            <?php echo $l['date_consultation']; ?>
                        </td>
                       
                    </tr>
            <?php }
            } ?>
        </tbody>
    </table>
</div>


</body>
</html>