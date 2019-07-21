<?php
    $postdata = file_get_contents("php://input");
    $request = json_decode($postdata);
    $usernameP = $request->username;
    $passwordP = $request->password;
    
       class MyDB extends SQLite3 {
      function __construct() {
         $this->open('../Database/gym.db');
      }
   }
    $db = new MyDB();
    if(!$db) {
      echo $db->lastErrorMsg();
   } else {

   $sql =<<<EOF
      SELECT * from user_details;
EOF;

   $ret = $db->query($sql);
   while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
      if($row['reg_username'] == $usernameP){
          if($row['reg_password'] == $passwordP){
              echo "Logged in";
          }else{
              echo "Enter Correct Password";
          }
          exit();
      }
   }
    echo "Username does not exits";
   $db->close();
    }
?>