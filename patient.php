<?php
    include_once('connect.php');

    function insert($code,$nom,$prenom,$sexe,$tel,$adresse,$date_enregistrement){
        try{
            $sql = "INSERT INTO dossier_patient(code,nom,prenom,sexe,tel,adresse,date_enregistrement) VALUES('$code','$nom','$prenom','$sexe','$tel','$adresse','$date_enregistrement')";
            $con = connexion();
            $r = $con->exec($sql);
            return $r;
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }


    function selectAll(){
        try
        {
            $sql = "SELECT * FROM dossier_patient";
            $con = connexion();
            $result = $con->query($sql);
    
            $rs = $result->fetchAll(PDO::FETCH_ASSOC);
    
           return $rs;
    
        }catch(PDOException $e){
            die($e->getMessage());
        }
    
    }



  
