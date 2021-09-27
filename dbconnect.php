<?php
require_once './env.php';
ini_set('display_errors',true);
  function connect(){
    $host = DB_HOST;
    $db   = DB_NAME;
    $user = DB_USER;
    $pass = DB_PASS;
    $dsn = "mysql:host=$host;dbname=$db;charset=utf8";
    
  
    try{
      $dbh = new PDO($dsn,$user,$pass,[
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
      ]);
      echo '接続成功したよ！！';
    } catch(PDOException $e){
      echo '接続失敗したよ'. $e->getMessage();
      exit();
    };
  }
  
  echo connect();

