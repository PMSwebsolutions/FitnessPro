<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.loader {
  margin: auto;    
  margin-top: 350px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 50px;
  height: 50px;
  -webkit-animation: spin 2s linear infinite; /* Safari */
  animation: spin 2s linear infinite;
}

/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>
</head>
<body>

<div class="loader"></div>

</body>
</html>

<?php
    class MyDB extends SQLite3 {
      function __construct() {
         $this->open('Database/gym.db');
      }
   }
   
   $db = new MyDB();
   if(!$db) {
      echo $db->lastErrorMsg();
   }

   $sql =<<<EOF
      SELECT * from user_details;
EOF;

   $ret = $db->query($sql);
   if(!$ret->fetchArray(SQLITE3_ASSOC)){
       $URL = "intro.html";
       echo "<script>document.location.href='{$URL}';</script>";
   }else{
       $db->close();
       echo "<script>window.location.href = 'login.html'</script>";
   }
   $db->close();
?>