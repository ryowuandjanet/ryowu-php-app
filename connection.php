<?php
//獲取Heroku ClearDB連接信息
$cleardb_url = parse_url ( getenv ( "CLEARDB_DATABASE_URL" ) ) ;  
$cleardb_server = $cleardb_url [ "host" ] ;  
$cleardb_username = $cleardb_url [ "user" ] ;  
$cleardb_password = $cleardb_url [ "pass" ] ;  
$cleardb_db = substr ( $cleardb_url [ "path" ] , 1 ) ;  
$active_group = '默認' ;  
$query_builder = TRUE ;  
// 連接數據庫
$conn = mysqli_connect ( $cleardb_server , $cleardb_username , $cleardb_password , $cleardb_db ) ;     
?>


