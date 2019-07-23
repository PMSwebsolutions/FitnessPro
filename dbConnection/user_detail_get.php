<?php    
    class MyDB extends SQLite3 {
      function __construct() {
         $this->open('../Database/gym.db');
      }
   }
    $db = new MyDB();
    if(!$db) {
      echo $db->lastErrorMsg();
   } 


    $que = $db->prepare('SELECT * FROM user_details WHERE status=1');
    $ret = $que->execute();
    
  while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
        $comp = $row['reg_company'];
        $user = $row['reg_username'];
        $email = $row['reg_email'];
        
      }
    $myObj = array($comp,$user,$email);
    $res = json_encode($myObj);
    echo $res;
   $db->close();
    
?>