<?php
    include_once('connect.php');

    function insert($idconsultation,$prescription){
        try{
            $sql = "INSERT INTO prescription(idconsultation,prescription) VALUES('$idconsultation','$prescription')";
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
            $sql = "SELECT * FROM prescription";
            $con = connexion();
            $result = $con->query($sql);
    
            $rs = $result->fetchAll(PDO::FETCH_ASSOC);
    
           return $rs;
    
        }catch(PDOException $e){
            die($e->getMessage());
        }
    
    }

 

   