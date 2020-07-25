<?php 
class updatecontroller extends login {      

    function updateapp($post,$appid){
        try{            
            $update =  new update();
            $msg =  $update -> editapp($post,$appid);
            
        }
        catch(Exception $exc){
            echo 'User Name or Password do not match!';
        }
    }     
        

}

?>