<?php
    $postdata = file_get_contents("php://input");
    $request = json_decode($postdata);
    $name = $request->name;
    
    class MyDB extends SQLite3 {
      function __construct() {
         $this->open('../Database/gym.db');
      }
   }
   
   $db = new MyDB();
   if(!$db){
      echo $db->lastErrorMsg();
   } 


     $que = $db->prepare('SELECT type FROM plan_type');
     $ret = $que->execute();
     $count = 0;
     $arr = [];
     while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
            if(strtolower($name) == strtolower($row['type'])){
                echo "failed";
                exit();
            }
      }
     $que = $db->prepare('INSERT INTO plan_type (type) VALUES (:name)');
     $que->bindValue(':name', $name, SQLITE3_TEXT);    
     $ret = $que->execute();
    echo "success";
       
   $db->close();
?>