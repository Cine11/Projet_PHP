<?php
    include_once('connect.php');

    function select($code){
        try{
            $sql = SELECT "code, nom, prenom, sexe, tel, adresse, date_enregistrement" FROM `dossier_patient` WHERE code LIKE'$code';
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
