<?php
 $myval = $_GET['id'];
 $category = $_GET['category'];
 



 switch($category){

    case "feed":
    $db2 = mysqli_connect("localhost","root","","general_news");


  

 $querydelete = "delete from feed where news_id = $myval";
 $var2 = $db2->query($querydelete);
 if($var2){
     
    
     echo '<script type="text/javascript">
            
           window.location = "http://localhost/mynews/crud/general_news_records.php"
      </script>';
 }else{
     echo 'Failed to delete record';
 }
 break;

 case "business":
    $db2 = mysqli_connect("localhost","root","","general_news");


  

 $querydelete = "delete from business where news_id = $myval";
 $var2 = $db2->query($querydelete);
 if($var2){
     
    
     echo '<script type="text/javascript">
            
           window.location = "http://localhost/mynews/crud/business_news_records.php"
      </script>';
 }else{
     echo 'Failed to delete record';
 }
 break;

 

 case "entertainment":
    $db2 = mysqli_connect("localhost","root","","general_news");


  

 $querydelete = "delete from entertainment where news_id = $myval";
 $var2 = $db2->query($querydelete);
 if($var2){
     
    
     echo '<script type="text/javascript">
            
           window.location = "http://localhost/mynews/crud/entertainment_news_records.php"
      </script>';
 }else{
     echo 'Failed to delete record';
 }
 break;


 case "sports":
    $db2 = mysqli_connect("localhost","root","","general_news");


  

 $querydelete = "delete from sports where news_id = $myval";
 $var2 = $db2->query($querydelete);
 if($var2){
     
    
     echo '<script type="text/javascript">
            
           window.location = "http://localhost/mynews/crud/sports_news_records.php"
      </script>';
 }else{
     echo 'Failed to delete record';
 }
 break;


 case "world":
 $db2 = mysqli_connect("localhost","root","","general_news");




$querydelete = "delete from world where news_id = $myval";
$var2 = $db2->query($querydelete);
if($var2){
  
 
  echo '<script type="text/javascript">
         
        window.location = "http://localhost/mynews/crud/world_news_records.php"
   </script>';
}else{
  echo 'Failed to delete record';
}
break;


 }
 
?>