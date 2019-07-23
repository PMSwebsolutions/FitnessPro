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
  
        
    $que = $db->prepare('UPDATE user_details SET status=0');
    $ret = $que->execute();
   
        
   $que = $db->prepare('SELECT * FROM user_details WHERE reg_username = :username');
   $que->bindValue(':username', $usernameP, SQLITE3_TEXT);
   $ret = $que->execute();        
   while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
      if($row['reg_username'] == $usernameP){
          if($row['reg_password'] == $passwordP){
                $que = $db->prepare('UPDATE user_details SET status=1 where reg_username = :username');
                $que->bindValue(':username', $usernameP, SQLITE3_TEXT);
                $ret = $que->execute();    
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