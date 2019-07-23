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

   $que = $db->prepare('SELECT * FROM user_details WHERE status = 1');
   $ret = $que->execute();    
   $count = 0;
   $myObj = [];
   while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
        $myObj[$count] = array($row['reg_username'],$row['reg_email'],$row['reg_company'],$row['reg_phone'],$row['id']);
        $count = $count + 1;
      }
    $res = json_encode($myObj);
    echo $res;
   $db->close();
    
?>