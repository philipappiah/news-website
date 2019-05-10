

<?php
try{
  
  $target_dir = "crud/uploads/";
$target_file = $target_dir . basename($_FILES["image1"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image

    $check = getimagesize($_FILES["image1"]["tmp_name"]);
    
    if($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
        //echo $target_file;

        $allowTypes = array('jpg','png','jpeg','gif','.mp4','3gp','avi','ogg');
        if(in_array($imageFileType,$allowTypes)){
        

        if(empty($_FILES["image1"]["tmp_name"])){
            
        }else{
            $image1 = file_get_contents($_FILES['image1']['tmp_name']);
            move_uploaded_file($_FILES["image1"]["tmp_name"],$target_file);

        }
        try{
        if(empty($_FILES["image2"]["tmp_name"])){
            
        }else{
            $target_file2 = $target_dir . basename($_FILES["image2"]["name"]);
            $uploadOk = 1;
            $imageFileType2 = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));
            if(in_array($imageFileType2,$allowTypes)){
                $image2 = file_get_contents($_FILES['image2']['tmp_name']);
                move_uploaded_file($_FILES["image2"]["tmp_name"],$target_file2);

            }else{
                echo "Second file is not an image"."<br>";
            }
        


            

        }
    }catch(Exception $e){
        echo 'File is not an image';
    }
    

        if(empty($_FILES["image3"]["tmp_name"])){
            
        }else{
            $target_file3 = $target_dir . basename($_FILES["image3"]["name"]);
            $uploadOk = 1;
            $imageFileType3 = strtolower(pathinfo($target_file3,PATHINFO_EXTENSION));
            if(in_array($imageFileType3,$allowTypes)){
                $image3 = file_get_contents($_FILES['image3']['tmp_name']);
                move_uploaded_file($_FILES["image3"]["tmp_name"],$target_file3);

            }else{
                echo "Third file is not an image"."<br>";
            }
        }

        if(empty($_FILES["image4"]["tmp_name"])){
            
        }else{
            $target_file4 = $target_dir . basename($_FILES["image4"]["name"]);
            $uploadOk = 1;
            $imageFileType4= strtolower(pathinfo($target_file4,PATHINFO_EXTENSION));
            if(in_array($imageFileType4,$allowTypes)){
                $image4 = file_get_contents($_FILES['image4']['tmp_name']);
                move_uploaded_file($_FILES["image4"]["tmp_name"],$target_file4);

            }else{
                echo "Fourth file is not an image"."<br>";
            }
        }

        if(empty($_FILES["image5"]["tmp_name"])){
            
        }else{
            $target_file5 = $target_dir . basename($_FILES["image5"]["name"]);
            $uploadOk = 1;
            $imageFileType5 = strtolower(pathinfo($target_file5,PATHINFO_EXTENSION));
            if(in_array($imageFileType5,$allowTypes)){
                $image5 = file_get_contents($_FILES['image5']['tmp_name']);
                move_uploaded_file($_FILES["image5"]["tmp_name"],$target_file5);

            }else{
                echo "Fifth file is not an image";
            }
        }

        if(empty($_FILES["video"]["tmp_name"])){
            
        }else{
            $target_file6 = $target_dir . basename($_FILES["video"]["name"]);
            $uploadOk = 1;
            $myallowTypes = array('mp4','3gp','avi','ogg');
            $imageFileType6 = strtolower(pathinfo($target_file6,PATHINFO_EXTENSION));
            if(in_array($imageFileType6,$myallowTypes)){
                $image6 = file_get_contents($_FILES['video']['tmp_name']);
                move_uploaded_file($_FILES["video"]["tmp_name"],$target_file6);

            }else{
                echo "File is not a video. Please upload a video";
            }
        }




        
        $uploadOk = 1;
        $headline = $_POST['headline'];
        $description = $_POST['description'];
        $source = $_POST['source'];
        $link = $_POST['link'];
        $category = $_POST['category'];
        
       
        
        
        
        
        $date_created = date("Y-m-d H:i:s");
  
        
  
        switch($category){
            case "general":
            $mycat = "feed";
            $db = mysqli_connect("localhost", "root", "", "general_news");
            $dbh = new PDO("mysql:host=localhost;dbname=general_news", "root", "");
            $stmt = $dbh->prepare("insert into feed values('',?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bindParam(1,$headline);
        $stmt->bindParam(2,$description);
        $stmt->bindParam(3,$target_file);
        $stmt->bindParam(4,$image1);
        $stmt->bindParam(5,$target_file2);
        $stmt->bindParam(6,$image2);
        $stmt->bindParam(7,$target_file3);
        $stmt->bindParam(8,$image3);
        $stmt->bindParam(9,$target_file4);
        $stmt->bindParam(10,$image4);
        $stmt->bindParam(11,$target_file5);
        $stmt->bindParam(12,$image5);
        $stmt->bindParam(13,$target_file6);
        $stmt->bindParam(14,$source);
        $stmt->bindParam(15,$link);
        $stmt->bindParam(16,$date_created);
        $stmt->bindParam(17,$mycat);
        $stmt->execute();
  
      
        
        if($stmt){
            echo "Record inserted successfully";
        }else{
            echo "Failed to insert record";
        }
  
        break;
  
  
            case "business":
            $db = mysqli_connect("localhost", "root", "", "general_news");
            $dbh = new PDO("mysql:host=localhost;dbname=general_news", "root", "");
            $stmt = $dbh->prepare("insert into business values('',?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bindParam(1,$headline);
        $stmt->bindParam(2,$description);
        $stmt->bindParam(3,$image1);
        $stmt->bindParam(4,$image2);
        $stmt->bindParam(5,$image3);
        $stmt->bindParam(6,$image4);
        $stmt->bindParam(7,$image5);
        $stmt->bindParam(8,$source);
        $stmt->bindParam(9,$link);
        $stmt->bindParam(10,$date_created);
        $stmt->bindParam(11,$category);
        $stmt->execute();
  
            
            if($stmt){
                echo "Record inserted successfully";
            }else{
                echo "Failed to insert record";
            }
      
            break;
      
      
  
            case "entertainment":
            $db = mysqli_connect("localhost", "root", "", "general_news");
            $dbh = new PDO("mysql:host=localhost;dbname=general_news", "root", "");
            $stmt = $dbh->prepare("insert into entertainment values('',?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bindParam(1,$headline);
        $stmt->bindParam(2,$description);
        $stmt->bindParam(3,$image1);
        $stmt->bindParam(4,$image2);
        $stmt->bindParam(5,$image3);
        $stmt->bindParam(6,$image4);
        $stmt->bindParam(7,$image5);
        $stmt->bindParam(8,$source);
        $stmt->bindParam(9,$link);
        $stmt->bindParam(10,$date_created);
        $stmt->bindParam(11,$category);
        $stmt->execute();
  
          
            
            if($stmt){
                echo "Record inserted successfully";
            }else{
                echo "Failed to insert record";
            }
      
            break;
      
      
            case "sports":
            $db = mysqli_connect("localhost", "root", "", "general_news");
            $dbh = new PDO("mysql:host=localhost;dbname=general_news", "root", "");
            $stmt = $dbh->prepare("insert into sports values('',?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bindParam(1,$headline);
        $stmt->bindParam(2,$description);
        $stmt->bindParam(3,$image1);
        $stmt->bindParam(4,$image2);
        $stmt->bindParam(5,$image3);
        $stmt->bindParam(6,$image4);
        $stmt->bindParam(7,$image5);
        $stmt->bindParam(8,$source);
        $stmt->bindParam(9,$link);
        $stmt->bindParam(10,$date_created);
        $stmt->bindParam(11,$category);
        $stmt->execute();
  
          
            
            if($stmt){
                echo "Record inserted successfully";
            }else{
                echo "Failed to insert record";
            }
      
            break;
      
      
            case "foreign":
              $mycategory="world";
              $db = mysqli_connect("localhost", "root", "", "general_news");
            $dbh = new PDO("mysql:host=localhost;dbname=general_news", "root", "");
            $stmt = $dbh->prepare("insert into world values('',?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bindParam(1,$headline);
        $stmt->bindParam(2,$description);
        $stmt->bindParam(3,$image1);
        $stmt->bindParam(4,$image2);
        $stmt->bindParam(5,$image3);
        $stmt->bindParam(6,$image4);
        $stmt->bindParam(7,$image5);
        $stmt->bindParam(8,$source);
        $stmt->bindParam(9,$link);
        $stmt->bindParam(10,$date_created);
        $stmt->bindParam(11,$mycategory);
        $stmt->execute();
  
        
            
              
              if($stmt){
                  echo "Record inserted successfully";
              }else{
                  echo "Failed to insert record";
              }
        
              break;
        
        
        }
    }else{
        echo "File is not an image.";
        $uploadOk = 0;
    }
  
} else {
        echo "Error. File is not an image or file size is too large";
        $uploadOk = 0;
    }
}catch(Exception $e){
    echo 'Error. File is not an image';
}

  
     
     

  




  
   
  
?>
