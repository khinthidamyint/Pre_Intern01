<?php 
class dashcontroller extends dash{

    function getTotalApp(){
        try{
            $dash = new dash();
            $tapp =  $dash -> getCount();           

            return $tapp;
        }
        catch(Exception $ex){
            echo "Cann't Control!";
        }
        
        
    }
    
}
?>