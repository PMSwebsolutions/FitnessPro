<?php
    $postdata = file_get_contents("php://input");
    $request = json_decode($postdata);
    $company = $request->company;
    $email = $request->email;
    $phone = $request->phone;
    $username = $request->username;
    $password = $request->password;
    $category = $request->category;
    $profile = $request->profile;
    
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
      INSERT INTO user_details (reg_email, reg_phone, reg_username, reg_password, reg_company, category,permission)
      VALUES ("$email", "$phone", "$username", "$password", "$company", "$category",1);

      
EOF;

   $ret = $db->exec($sql);

# Adding Profile Picture
    $image_parts = explode(";base64,", $profile);
    $image_base64 = base64_decode($image_parts[1]);
    $que = $db->prepare('UPDATE user_details SET reg_profile=:pic WHERE reg_username=:name');
    $que->bindValue(':name', $username, SQLITE3_TEXT);
    $que->bindValue(':pic', $image_base64, SQLITE3_BLOB);
    $ret1 = $que->execute();
    
   if(!$ret) {
      echo $db->lastErrorMsg();
   } else {
      echo "success";
   }
   $db->close();
?>