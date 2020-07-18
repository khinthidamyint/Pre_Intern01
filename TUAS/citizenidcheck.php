<?php

include 'db2.php';

try{
    $conn = Database::connect();   
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
 }catch(PDOException $e){
    die('Unable to connect with the database');
 }

if(isset($_POST['citizenid'])){
   $citizenid = $_POST['citizenid'];

   // Check citizenid
   $stmt = $conn->prepare("SELECT count(*) as cntUser FROM applicant WHERE citizenid=:citizenid");
   $stmt->bindValue(':citizenid', $citizenid, PDO::PARAM_STR);
   $stmt->execute(); 
   $count = $stmt->fetchColumn();

   $response = "<span style='color: green;'>Available.</span>";
   if($count > 0){
      $response = "<span style='color: red;'>Not Available.</span>";
   }

   echo $response;
   exit;
}