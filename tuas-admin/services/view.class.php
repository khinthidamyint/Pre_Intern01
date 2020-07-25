<?php 
class view extends Db{

    function getParent($appid){
        $pdo = $this->connect();
        $ret1 = $pdo->prepare("select parent.name from parent where parent.applicant_id='$appid'");
        $ret1->execute();        
        $result = $ret1->fetchAll();
        $pdo=$this->disconnect();
        return $result;
    }

    function getApplicant($appid){
        $pdo = $this->connect();
        $ret = $pdo->prepare("select applicant.id, applicant.major, applicant.ename, applicant.mmname, applicant.status,applicant.date,adddress.mobile,
        adddress.email, applicant.birthday, applicant.nationality, applicant.gender,
        adddress.addressno, adddress.street, adddress.township, adddress.city from applicant
        inner join adddress on adddress.id=applicant.address_id where applicant.id='$appid'");
        $ret->execute();
        $row = $ret->fetch();
        $pdo=$this->disconnect();

        return $row;
    }

   
}


?>