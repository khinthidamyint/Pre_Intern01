<?php
  class Parents extends Db {    

    protected function setParentsAlive($data,$appid,$addid) {
      $pdo=$this->connect();
      $sql = "INSERT INTO parent(applicant_id,name,nationality,status,age,occupation,position,
            address_id,guardian_status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
      $stmt = $pdo->prepare($sql);
      $stmt->execute([$appid,$data['name'],$data['nationality'],$data['status'],$data['age'],
            $data['occupation'],$data['position'],$addid,$data['fmostatus']]);
    }

    protected function setParentsDecesed($data,$appid,$addid) {
      $pdo=$this->connect();
      $sql = "INSERT INTO parent(applicant_id,name,nationality,status,address_id,guardian_status) VALUES (?, ?, ?, ?, ?, ?)";
      $stmt = $pdo->prepare($sql);
      $stmt->execute([$appid,$data['name'],$data['nationality'],$data['status'],$addid,$data['fmostatus']]);
    }
  }
?>

 