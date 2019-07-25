<?php
    $postdata = file_get_contents("php://input");
    $request = json_decode($postdata);
    $name = $request->name;
    $price = $request->price;
    $years = $request->years;
    $months = $request->months;
    $tax = $request->tax;
    $type = $request->type;
    $finalPrice = $request->finalPrice;
    $category = $request->category;
    
    class MyDB extends SQLite3 {
      function __construct() {
         $this->open('../Database/gym.db');
      }
   }
   
   $db = new MyDB();
   if(!$db){
      echo $db->lastErrorMsg();
   } 

     $que = $db->prepare('SELECT name FROM plan where category=:category');
     $que->bindValue(':category', $category, SQLITE3_TEXT); 
     $ret = $que->execute();
     while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
            if(strtolower($name) == strtolower($row['name'])){
                echo "failed";
                exit();
            }
     }


   $sql =<<<EOF
   INSERT INTO plan (name, price, years, months,tax,type,finalPrice,category)
   VALUES ("$name", $price, $years, $months,$tax,"$type",$finalPrice,"$category");

      
EOF;

   $ret = $db->exec($sql);
   if(!$ret) {
      echo $db->lastErrorMsg();
   } else {
      echo "success";
   }
   $db->close();
?>