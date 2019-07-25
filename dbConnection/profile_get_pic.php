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

   $que = $db->prepare('SELECT reg_profile FROM user_details WHERE status = 1');
   $ret = $que->execute();    
   while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
            $pic = $row['reg_profile'];
      }
//print_r($row)
    echo ($pic);
   $db->close();
    
?>