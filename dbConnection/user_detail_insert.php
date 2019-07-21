<?php
    $postdata = file_get_contents("php://input");
    $request = json_decode($postdata);
    $company = $request->company;
    $email = $request->email;
    $phone = $request->phone;
    $username = $request->username;
    $password = $request->password;
    
    class MyDB extends SQLite3 {
      function __construct() {
         $this->open('../Database/gym.db');
      }
   }
   
   $db = new MyDB();
   if(!$db){
      echo $db->lastErrorMsg();
   } 

   $sql =<<<EOF
      INSERT INTO user_details (reg_email, reg_phone, reg_username, reg_password, reg_company)
      VALUES ("$email", "$phone", "$username", "$password", "$company");

      
EOF;

   $ret = $db->exec($sql);
   if(!$ret) {
      echo $db->lastErrorMsg();
   } else {
      echo "success";
   }
   $db->close();
?>