<?php 
class applicant extends Db {
   

    
   
    //  `id`, `title`, `ename`, `mmname`, `gender`,`syllabus`, `studyplace`, `school`, `level`, `major`,
    //  `mark`, `birthday`, `nationality`, `citizenship`, `religion`, `bloodgroup`, `citizenid`,
    //   `passportid`, `status`, `mobile`, `facebook` FROM `applicant` 
    function setApplicant($data){        
        
        $pdo=$this->connect();
        $sql = "INSERT INTO applicant(title,ename,mmname,gender,syllabus,studyplace,school,level,major,
                mark,birthday,nationality,citizenship,religion,bloodgroup,citizenid,passportid,status,mobile,
                facebook) VALUES (?, ?, ?, ?, ?, ?, ?,?,?,?,?, ?, ?, ?, ?, ?, ?,?,?,?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$data['title'],$data['ename'],$data['mmname'],$data['gender'],$data['syllabus'],
                $data['studyplace'],$data['school'],$data['level'],$data['major'],$data['mark'],$data['birthdate'],
                $data['nationality'],$data['citizenship'],$data['religion'],$data['bloodgroup'],$data['citizenid'],
                $data['passportid'],$data['status'],$data['mobile'],$data['facebook']]);
        $id = $pdo->lastInsertId();
        

        return $id;

       
    }

}

?>