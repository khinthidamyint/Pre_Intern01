<?php 
class login extends Db {
    
     
  
    function adminLogin($post){
        if(isset($_POST['login']))
        {
            $adminuser=$_POST['username'];
            $password=$_POST['password'];
            $pdo=$this->connect();
            $query = $pdo -> query("select ID from tbladmin where  AdminuserName='$adminuser' && Password='$password' ");
            $ret = $query -> fetch();

            if($ret>0){
                $_SESSION['aid']=$ret['ID'];       
                header('location:dashboard.php');
            }
            else{
                $msg="Invalid Details.";
            }

           
        }
        return $msg;
}
}
  ?>