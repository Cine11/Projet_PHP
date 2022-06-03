<?php
    include_once('connect.php');

    function insert($id,$idmedecin,$codepatient,$poids,$hauteur,$diagnostique,$date_consultation){
        try{
            $sql = "INSERT INTO consultation(id,idmedecin,codepatient,poids,hauteur,diagnostique,date_consultation) VALUES('$id','$idmedecin','$codepatient','$poids','$hauteur','$diagnostique','$date_consultation')";
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
            $sql = "SELECT * FROM consultation";
            $con = connexion();
            $result = $con->query($sql);
    
            $rs = $result->fetchAll(PDO::FETCH_ASSOC);
    
           return $rs;
    
        }catch(PDOException $e){
            die($e->getMessage());
        }
    
    }

 

   