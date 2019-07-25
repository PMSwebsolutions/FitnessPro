<?php
    $postdata = file_get_contents("php://input");
    $request = json_decode($postdata);
    $id = $request->id;
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
     while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
            if(strtolower($name) == strtolower($row['type'])){
                echo "failed";
                exit();
            }
      }
     $que = $db->prepare('UPDATE plan_type  SET type=:name WHERE id=:id');
     $que->bindValue(':name', $name, SQLITE3_TEXT);  
     $que->bindValue(':id', $id, SQLITE3_INTEGER);  
     $ret = $que->execute();
     echo "success";
       
   $db->close();
?>