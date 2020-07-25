<?php 
class logincontroller extends login {      

    function logintoDashboard($post){
        try{            
            $login =  new login();
            $msg =  $login -> adminLogin($post);
            
        }
        catch(Exception $exc){
            echo 'User Name or Password do not match!';
        }
    }     
        

}

?>