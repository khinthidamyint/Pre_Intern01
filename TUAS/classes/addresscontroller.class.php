<?php 
class addresscontroller extends address {      

    function insertData($data){
        try{            
            $address =  new address();
            $id =  $address -> setAddress($data);
            return $id;
        }

        catch(Exception $exc){
            echo 'Data not Inserted!';
        }

    }  
    
    function insertParentData($data){
        try{            
            $address =  new address();
            $id =  $address -> setParentAddress($data);
            return $id;
        }

        catch(Exception $exc){
            echo 'Data not Inserted!';
        }
        
    } 
        

        
    
    

}

?>