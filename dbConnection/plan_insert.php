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
    
    class MyDB extends SQLite3 {
      function __construct() {
         $this->open('../Database/gym.db');
      }
   }
   
   $db = new MyDB();
   if(!$db){
      echo $db->lastErrorMsg();
   } 

   $sql =<<<EOF
      INSERT INTO plan (name, price, years, months,tax,type,finalPrice)
      VALUES ("$name", $price, $years, $months,$tax,"$type",$finalPrice);

      
EOF;

   $ret = $db->exec($sql);
   if(!$ret) {
      echo $db->lastErrorMsg();
   } else {
      echo "success";
   }
   $db->close();
?>