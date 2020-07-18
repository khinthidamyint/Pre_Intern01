<?php 
class applicantcontroller extends applicant {      

    function insertData($data){
        try{            
            $applicant =  new applicant();
            $id =  $applicant -> setApplicant($data);
            return $id;
        }
        catch(Exception $exc){
            echo 'Data not Inserted!';
        }
    }     
        

        
    
    

}

?>