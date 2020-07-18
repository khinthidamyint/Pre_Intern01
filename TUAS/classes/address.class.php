<?php 
class address extends Db {
    private $addressno;
    private $street;
    private $township;
    private $city;
    private $zipcode;
    private $telephone;
    private $mobile;
    private $facebook;
    private $email;
    private $fax;

    
   
    //adddress `id`, `addressno`, `street`, `township`, `city`, `zipcode`, `telephone`, `mobile`, `facebook`, `email`, `fax` 
    function setAddress($data){
        $this->addressno   =   $data['addressno'];
        $this->street      =   $data['street'];
        $this->township    =   $data['township'];
        $this->city        =   $data['city'];
        $this->zipcode     =   $data['zipcode'];
        $this->telephone   =   $data['telephone'];
        $this->mobile      =   $data['mobile'];
        $this->facebook    =   $data['facebook'];
        $this->email       =   $data['email'];
        $this->fax         =   $data['fax'];
        
        $pdo=$this->connect();
        $sql = "INSERT INTO adddress(addressno,street,township,city,zipcode,telephone,mobile,facebook,email,fax) VALUES (?, ?, ?, ?, ?, ?, ?,?,?,?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$this->addressno,$this->street,$this->township,$this->city,$this->zipcode,$this->telephone,$this->mobile,$this->facebook,$this->email,$this->fax]);
        $id = $pdo->lastInsertId();
        

        return $id;       
    }

    function setParentAddress($data){
        $this->addressno   =   $data['addressno'];
        $this->street      =   $data['street'];
        $this->township    =   $data['township'];
        $this->city        =   $data['city'];
        $this->zipcode     =   $data['zipcode'];
        $this->telephone   =   $data['telephone'];
        $this->mobile      =   $data['mobile'];       
        
        
        $pdo=$this->connect();
        $sql = "INSERT INTO adddress(addressno,street,township,city,zipcode,telephone,mobile) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$this->addressno,$this->street,$this->township,$this->city,$this->zipcode,$this->telephone,$this->mobile]);
        $id = $pdo->lastInsertId();
        

        return $id;       
    }

}

?>