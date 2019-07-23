<?php
    $postdata = file_get_contents("php://input");
    $request = json_decode($postdata);
    $id = $request->id;
    $username = $request->username;
    $email = $request->email;
    $company = $request->company;
    $phone = $request->phone;
  
    
    class MyDB extends SQLite3 {
      function __construct() {
         $this->open('../Database/gym.db');
      }
   }
   
   $db = new MyDB();
   if(!$db){
      echo $db->lastErrorMsg();
   } 


    $que = $db->prepare('UPDATE user_details SET reg_username=:username, reg_email=:email, reg_company=:company, reg_phone=:phone WHERE id=:id');
    $que->bindValue(':id', $id, SQLITE3_INTEGER);
    $que->bindValue(':username', $username, SQLITE3_TEXT);
    $que->bindValue(':email', $email, SQLITE3_TEXT);
    $que->bindValue(':company', $company, SQLITE3_TEXT);
    $que->bindValue(':phone', $phone, SQLITE3_INTEGER);
    $ret = $que->execute();
   if(!$ret) {
      echo $db->lastErrorMsg();
   } else {
      echo "success";
   }
   $db->close();
?>