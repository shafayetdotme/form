<?php 
include "config.php";


$username   = "sam";
$age        = 18;
$password   = "5546asd546s5d4f64";
$created_at = date("Y-m-d H:i:s");

// $SQL = "INSERT INTO books (username,age) VALUES (:username,:age)";

$STH=$DBH->prepare("INSERT INTO users (username,age,password,created_at) VALUES (:username,:age,:password,:created_at)");

$STH->execute(array(
  ':username'   =>$username,
  ':age'        =>$age,
  ':password'   =>$password,
  ':created_at' =>$created_at
  )
);

?>