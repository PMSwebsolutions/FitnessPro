<?php
    $postdata = file_get_contents("php://input");
    $request = json_decode($postdata);
    $id = $request->id;
    $name = $request->name;
    $price = $request->price;
    $years = $request->years;
    $months = $request->months;
    $tax = $request->tax;
    $type = $request->type;
    $finalPrice = $request->finalPrice;
    
    class MyDB extends SQLite3 {
      function __construct() {
         $this->open('../Database/gym.db');
      }
   }
   
   $db = new MyDB();
   if(!$db){
      echo $db->lastErrorMsg();
   } 


    $que = $db->prepare('UPDATE plan SET name=:name,price=:price,years=:years,months=:months,tax=:tax,type=:type,finalprice=:finalPrice WHERE id=:id');
    $que->bindValue(':id', $id, SQLITE3_INTEGER);
    $que->bindValue(':name', $name, SQLITE3_TEXT);
    $que->bindValue(':price', $price, SQLITE3_INTEGER);
    $que->bindValue(':years', $years, SQLITE3_INTEGER);
    $que->bindValue(':months', $months, SQLITE3_INTEGER);
    $que->bindValue(':tax', $tax, SQLITE3_INTEGER);
    $que->bindValue(':type', $type, SQLITE3_TEXT);
    $que->bindValue(':finalPrice', $finalPrice, SQLITE3_INTEGER);
    $ret = $que->execute();
   if(!$ret) {
      echo $db->lastErrorMsg();
   } else {
      echo "success";
   }
   $db->close();
?>