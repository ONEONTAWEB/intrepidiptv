<?php
     define('DB_SERVER', 'localhost:3306');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '123pass');
   define('DB_DATABASE', 'stalker_db');
   define('DB_TABLE', 'administrators');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE,DB_TABLE);
?>
