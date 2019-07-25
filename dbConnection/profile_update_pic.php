<?php
    $postdata = file_get_contents("php://input");
    $request = json_decode($postdata);
    $profile = $request->pic;

     class MyDB extends SQLite3 {
      function __construct() {
         $this->open('../Database/gym.db');
      }
   }
   
   $db = new MyDB();
   if(!$db){
      echo $db->lastErrorMsg();
   } 

    $image_parts = explode(";base64,", $profile);
    $image_base64 = base64_decode($image_parts[1]);
    $que = $db->prepare('UPDATE user_details SET reg_profile=:pic WHERE status=1');
    $que->bindValue(':pic', $image_base64, SQLITE3_BLOB);
    $ret1 = $que->execute();

    $db->close();
    echo "success";
?>