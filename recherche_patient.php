<?php
 require_once "connect.php";
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

<form action="" method="post">

<div class="mb-3">
  <br><br><br><h2><center><label for="" class="form-label">Entrer le code ou le nom ou le prenom du patient a rechercher</label></center></h2>
  <br><input type="text" class="form-control" required  name="element" id="exampleFormControlInput1" placeholder="name">
  <input type="submit"class="btn btn-primary" data-bs-target="#exampleModal" data-bs-whatever="@mdo" name="envoyer" value="envoyer">

</div>

  

</form>


<?php 

function select($a)
{
  $sql="  SELECT `code`, `nom`, `prenom`, `sexe`, `tel`, `adresse`, `date_enregistrement` FROM `dossier_patient` WHERE code='$a' || nom='$a'|| prenom='$a'";

  $con= connexion();
$sth = $con->query($sql);
$result = $sth->fetchAll(PDO::FETCH_ASSOC);
if($result==0)
echo"ce n'e st pas dans la base ";




?>
<?php
require_once"head.php";
?>

<div class="table-responsive">
  <table id="table"  class="table table-bordered table-dark">
  <label for=""><h3>Recherche des Patients</h3></label>
  <thead>
    <tr>
      <th scope="col">code</th>
      <th scope="col">nom</th>
      <th scope="col">prenom</th>
      <th scope="col">sexe</th>
      <th scope="col">tel</th>
      <th scope="col">adresse</th>
      <th scope="col">date_enregistrement</th>

    </tr>
  </thead>
  <tbody>
  <?php foreach ($result as $row){ ?>
    <tr>
      <th scope="row"><?php echo $row['code']; ?></th>
      <td> <?php echo $row['nom']; ?></td>
      <td> <?php echo $row['prenom']; ?></td>
      <td> <?php echo $row['sexe']; ?></td>
      <td> <?php echo $row['tel']; ?></td>
      <td> <?php echo $row['adresse']; ?></td>
      <td> <?php echo $row['date_enregistrement']; ?></td>
    </tr>
    <tr> 
		<?php }?>
		  </tbody>
</table>
</div>

<?php
require_once"foot.php";
}
?>

<?php
if(isset($_POST['envoyer']))
{
$v=$_POST['element'];

select($v);

}

?>

</body>
