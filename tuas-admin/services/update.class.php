<?php 
    class update extends Db {
 
        function editapp($post,$appid){
            if(isset($_POST['edit']))
            {
                $remark=$_POST['remark'];
                $date = date("Y-m-d") ;
                echo $remark;
                $pdo=$this->connect();
                $sql = "UPDATE applicant SET status=?, date = ? WHERE id=?";
                $stmt= $pdo->prepare($sql);
                $stmt->execute([$remark, $date, $appid]); 

            }
            
        }
    }


?>