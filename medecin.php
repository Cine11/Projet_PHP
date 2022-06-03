<?php
//connection a la base de donne hopital
    include_once('connect.php');

    //fonction pour inserer un nouveau medecin
    function insert($id,$nom,$prenom,$sexe,$tel,$adresse,$email,$specialite){
        try{
            $sql = "INSERT INTO medecin(id,nom,prenom,sexe,tel,adresse,email,specialite) VALUES('$id','$nom','$prenom','$sexe','$tel','$adresse','$email','$specialite')";
            $con = connexion();
            $r = $con->exec($sql);
            return $r;
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    //fonction pour selectioner les elements du tableau medecin 

    function selectAll(){
        try
        {
            $sql = "SELECT * FROM medecin";
            $con = connexion();
            $result = $con->query($sql);
    
            $rs = $result->fetchAll(PDO::FETCH_ASSOC);
    
           return $rs;
    
        }catch(PDOException $e){
            die($e->getMessage());
        }
    
    }



