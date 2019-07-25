<?php    

    $postdata = file_get_contents("php://input");
    $request = json_decode($postdata);
    $id = $request->id;
    class MyDB extends SQLite3 {
      function __construct() {
         $this->open('../Database/gym.db');
      }
   }
    $db = new MyDB();

   $que = $db->prepare('DELETE FROM plan_type WHERE id=:id');
    $que->bindValue(':id', $id, SQLITE3_INTEGER);
    $ret = $que->execute();

//    $res = json_encode($ret->fetchArray());
    echo "Success";
   $db->close();
    
?>