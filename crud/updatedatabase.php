

<?php
  
  $db = mysqli_connect("localhost", "root", "", "general_news");
  $dbh = new PDO("mysql:host=localhost;dbname=general_news", "root", "");

  $msg = "";

       $myval = $_POST['id'];
       $target_dir = "uploads/";
       
   

  
      $headline = $_POST['headline'];
      $description = $_POST['description'];
      $source = $_POST['source'];
      $link = $_POST['link'];
      $category = $_POST['category'];

      $name1 = $_POST['file1'];
      $name2 = $_POST['file2'];
      $name3 = $_POST['file3'];
      $name4 = $_POST['file4'];
      $name5 = $_POST['file5'];
      $name6 = $_POST['file6'];

      
      if(empty($_FILES["image1"]["tmp_name"])){
        $image1 = NULL;
        $target_file = $name1;
      }else{
        $target_file = $target_dir . basename($_FILES["image1"]["name"]);
        $image1 = file_get_contents($_FILES['image1']['tmp_name']);

      }

      if(empty($_FILES["image2"]["tmp_name"])){
        $image2 = NULL;
        $target_file2 = $name2;
      }else{
        $target_file2 = $target_dir . basename($_FILES["image2"]["name"]);
        $image2 = file_get_contents($_FILES['image2']['tmp_name']);

      }
      if(empty($_FILES["image3"]["tmp_name"])){
        $image3 = NULL;
        $target_file3 = $name3;
      }else{
        $target_file3 = $target_dir . basename($_FILES["image3"]["name"]);
        $image3 = file_get_contents($_FILES['image3']['tmp_name']);

      }
      if(empty($_FILES["image4"]["tmp_name"])){
        $image4 = NULL;
        $target_file4 = $name4;
      }else{
        $target_file4 = $target_dir . basename($_FILES["image4"]["name"]);
        $image4 = file_get_contents($_FILES['image4']['tmp_name']);

      }

      if(empty($_FILES["image5"]["tmp_name"])){
        $image5 = NULL;
        $target_file5 = $name5;
      }else{
        $target_file5 = $target_dir . basename($_FILES["image5"]["name"]);
        $image5 = file_get_contents($_FILES['image5']['tmp_name']);

      }



      if(empty($_FILES["video"]["tmp_name"])){
          $target_file6 = $name6;
            
    }else{
    
        $target_file6 = $target_dir . basename($_FILES["video"]["name"]);
        $myallowTypes = array('mp4','3gp','avi','ogg');
        $imageFileType6 = strtolower(pathinfo($target_file6,PATHINFO_EXTENSION));
        if(in_array($imageFileType6,$myallowTypes)){
            $image6 = file_get_contents($_FILES['video']['tmp_name']);
            move_uploaded_file($_FILES["video"]["tmp_name"],$target_file6);

        }else{
            echo "File is not a video. Please upload a video";
        }
    }
      
      
      

      
      $date_created = date("Y-m-d H:i:s");

      

      switch($category){
        case "general":
        $category = "feed";
        
        $db = mysqli_connect("localhost", "root", "", "general_news");
        $dbh = new PDO("mysql:host=localhost;dbname=general_news", "root", "");
        $stmt = $dbh->prepare("UPDATE feed SET headline = ?,body = ?,related_image_name_1=?,related_image_1 = ?,related_image_name_2=?,related_image_2 = ?,related_image_name_3=?, related_image_3 = ?,
        related_image_name_4=?,related_image_4 = ?,related_image_name_5=?, related_image_5 = ?,related_video_name = ? ,source = ? , link = ?, date_published = ?, category = ? where news_id = ?");
   
    
    $stmt->execute(
        [$headline,$description,$target_file,$image1, $target_file2,$image2, $target_file3,$image3,$target_file4 ,$image4,$target_file5,$image5,$target_file6,$source,$link,$date_created,$category,$myval]


    );

    
    

  
    
    if($stmt){
        echo "Record inserted successfully";
    }else{
        echo "Failed to insert record";
    }


      break;


          case "business":
          $db = mysqli_connect("localhost", "root", "", "general_news");
          $dbh = new PDO("mysql:host=localhost;dbname=general_news", "root", "");
          $stmt = $dbh->prepare("UPDATE business SET headline = ?,body = ?,related_image_1 = ?,related_image_2 = ?, related_image_3 = ?,
          related_image_4 = ?, related_image_5 = ? ,source = ? , link = ?, date_published = ?, category = ? where news_id = ?");
     
      
      $stmt->execute(
          [$headline,$description,$image1, $image2, $image3,$image4,$image5,$source,$link,$date_created,$category,$myval]
  
  
      );
  

          
      if($stmt){
        echo "Record updated successfully";
    }else{
        echo "Failed to update record";
    }
    
          break;
    
    

          case "entertainment":
          $db = mysqli_connect("localhost", "root", "", "general_news");
          $dbh = new PDO("mysql:host=localhost;dbname=general_news", "root", "");
          $stmt = $dbh->prepare("UPDATE entertainment SET headline = ?,body = ?,related_image_1 = ?,related_image_2 = ?, related_image_3 = ?,
          related_image_4 = ?, related_image_5 = ? ,source = ? , link = ?, date_published = ?, category = ? where news_id = ?");
     
      
      $stmt->execute(
          [$headline,$description,$image1, $image2, $image3,$image4,$image5,$source,$link,$date_created,$category,$myval]
  
  
      );
  

        
          
      if($stmt){
        echo "Record updated successfully";
    }else{
        echo "Failed to update record";
    }
    
          break;
    
    
          case "sports":
          $db = mysqli_connect("localhost", "root", "", "general_news");
        $dbh = new PDO("mysql:host=localhost;dbname=general_news", "root", "");
        $stmt = $dbh->prepare("UPDATE sports SET headline = ?,body = ?,related_image_1 = ?,related_image_2 = ?, related_image_3 = ?,
        related_image_4 = ?, related_image_5 = ? ,source = ? , link = ?, date_published = ?, category = ? where news_id = ?");
   
    
    $stmt->execute(
        [$headline,$description,$image1, $image2, $image3,$image4,$image5,$source,$link,$date_created,$category,$myval]


    );

        
          
      if($stmt){
        echo "Record updated successfully";
    }else{
        echo "Failed to update record";
    }
          break;
    
    
          case "foreign":
            $category = "world";
            $db = mysqli_connect("localhost", "root", "", "general_news");
            $dbh = new PDO("mysql:host=localhost;dbname=general_news", "root", "");
            $stmt = $dbh->prepare("UPDATE world SET headline = ?,body = ?,related_image_1 = ?,related_image_2 = ?, related_image_3 = ?,
            related_image_4 = ?, related_image_5 = ? ,source = ? , link = ?, date_published = ?, category = ? where news_id = ?");
       
        
        $stmt->execute(
            [$headline,$description,$image1, $image2, $image3,$image4,$image5,$source,$link,$date_created,$category,$myval]
    
    
        );
    

      
          
            
            if($stmt){
                echo "Record updated successfully";
            }else{
                echo "Failed to update record";
            }
      
            break;
      
      
      }

     

  




  
   
  
?>
