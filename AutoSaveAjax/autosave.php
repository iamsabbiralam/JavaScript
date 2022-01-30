<?php
date_default_timezone_set('Asia/Dhaka'); //you can add your own timezone


$host = 'localhost';


$user = 'root';


$pass = 'P@ssw0rd';


$db = 'autosave';


$conn = new mysqli($host, $user, $pass, $db);


function insertPost($title,$content, $conn){


  $sql = "INSERT INTO post VALUES(null, ?, ?)";


  $stmt = $conn->stmt_init();


  if($stmt->prepare($sql)){


    $stmt->bind_param('ss',$title,$content);


    if($stmt->execute()){

    	print_r($stmt);
      echo $conn->insert_id;


    }


  }}


function updatePost($title,$content,$id, $conn){


  $sql = "UPDATE post SET title = ?, content = ? WHERE id = ?";


  $stmt = $conn->stmt_init();


  if($stmt->prepare($sql)){


    $stmt->bind_param('ssi',$title,$content,$id);


    if($stmt->execute()){


      echo "<i>Draft Saved at ".date("h:i:s a")."</i>";


    }


  }}


if(isset($_GET['save'])){


  $title = $_POST['title'];


  $content = $_POST['content'];


  $id = $_POST['id'];


  if($id != ''){


    updatePost($title, $content,$id, $conn);


  }


  else{


    insertPost($title, $content, $conn);


  }}

?>