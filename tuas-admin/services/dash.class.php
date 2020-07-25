<?php 
class dash extends Db {

    function getCount() {
        try{
            $pdo = $this->connect(); 
            //  $query = $pdo -> query("select count(*) from applicant");
            //   $ret = $query -> fetchColumn();
    
              $query = $pdo -> query("select id from applicant");
              $count = $query -> rowCount();
             

              return $count;
            }
        catch(Exception $ex){
            echo "No Database Connection!";
        }
        
         
    }
    
}
?>
                       