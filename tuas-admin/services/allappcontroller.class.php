<?php 
class allappcontroller extends allapp{

    function getTotalApp(){
        try{
            $allapp = new allapp();
            $allapp =  $allapp -> getAllApp();           

            return $allapp;
        }
        catch(Exception $ex){
            echo "Cann't Control!";
        }
        
        
    }
    
}
?>