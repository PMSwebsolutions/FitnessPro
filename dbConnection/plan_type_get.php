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
   $sql =<<<EOF
      SELECT * from plan_type;
EOF;
   $myObj = array();    
   $ret = $db->query($sql);
   $count = 0;
   while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
        $myObj[$count] = array($row['id'],$row['type']);
        $count = $count + 1;
      }
    $res = json_encode($myObj);
    echo $res;
   $db->close();
    
?>