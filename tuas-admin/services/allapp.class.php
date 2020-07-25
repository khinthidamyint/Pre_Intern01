<?php 
class allapp extends Db {

    function getAllApp() {
        try{
            $pdo = $this->connect(); 
            //  $query = $pdo -> query("select count(*) from applicant");
            //   $ret = $query -> fetchColumn();
    
            $ret = $pdo->prepare("select applicant.id, applicant.major, applicant.mmname, applicant.ename,
             adddress.email, adddress.mobile from applicant
            inner join adddress on adddress.id=applicant.address_id");
            $ret->execute();
            $result = $ret->fetchAll();
            return $result;

            }
        catch(Exception $ex){
            echo "No Database Connection!";
        }
        
         
    }
    
}
?>
                       