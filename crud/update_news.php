
<!doctype html>
<html>

<head>


<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
.myimg{
    margin-left:5%;
}
</style>

</head>
<?php

$myval = $_GET['id'];
$category = $_GET['category'];
 



 switch($category){

    case "feed":
    $db2 = mysqli_connect("localhost","root","","general_news");


  

 $query = "select * from feed where news_id = $myval";
 $var2 = $db2->query($query);
 $array = array();

 if($var2){
    while($row = $var2->fetch_assoc()) {
        $array[] = $row;
        
    }
    
     
 }else{
     echo 'Failed to update record';
 }
 break;

 case "business":
    $db2 = mysqli_connect("localhost","root","","general_news");


  

 $query = "select * from business where news_id = $myval";
 $var2 = $db2->query($query);
 $array = array();

 if($var2){
    while($row = $var2->fetch_assoc()) {
        $array[] = $row;
        
    }
     
    
    
 }else{
     echo 'Failed to update record';
 }
 break;

 

 case "entertainment":
    $db2 = mysqli_connect("localhost","root","","general_news");


  

 $query = "select * from entertainment where news_id = $myval";
 $var2 = $db2->query($query);
 $array = array();

 if($var2){
    while($row = $var2->fetch_assoc()) {
        $array[] = $row;
        
    }
     
    
    
 }else{
     echo 'Failed to update record';
 }
 break;


 case "sports":
    $db2 = mysqli_connect("localhost","root","","general_news");


  

 $query = "select * from sports where news_id = $myval";
 $var2 = $db2->query($query);
 $array = array();

 if($var2){
    while($row = $var2->fetch_assoc()) {
        $array[] = $row;
        
    }
     
    
    
 }else{
     echo 'Failed to update record';
 }
 break;


 case "world":
 $db2 = mysqli_connect("localhost","root","","general_news");




$query = "select * from world where news_id = $myval";
$var2 = $db2->query($query);
$array = array();

 if($var2){
    while($row = $var2->fetch_assoc()) {
        $array[] = $row;
        
    }
 
  
         
       
}else{
  echo 'Failed to update record';
}
break;


 }

echo'
<body>

<form class="form-horizontal" action="updatedatabase.php" method="POST" enctype="multipart/form-data">
  <fieldset>
    <div id="legend">
      <legend class="">Update News Item</legend>
    </div>
    
 
    <div class="control-group">
      
      <label class="control-label" for="headline">News Headline</label>
      <div class="controls">
        <input type="text" id="headline" name="headline" placeholder="" class="input-xlarge"  value="'.$array[0]['headline'].'">
        <p class="help-block">Enter news headline</p>
      </div>
    </div>
 
    <div class="control-group">
      
      <label class="control-label" for="description">News Body/Description</label>
      <div class="controls">
        <textarea type="text" id="description" name="description" placeholder="" class="input-xlarge">'.$array[0]['body'].'</textarea>
        <p class="help-block">Enter details of news item</p>
      </div>
    </div>
 
    <div class="control-group">
    <label class="control-label"  for="source">News Source</label>
      <div class="controls">
        <input type="text" id="source" name="source" placeholder="" class="input-xlarge" value="'.$array[0]['source'].'">
        <input type="hidden" name="id" id="id" value="'.$array[0]['news_id'].'" >
       
        <p class="help-block">Please confirm the source of the news item</p>
      </div>
    </div>

    <div class="control-group">
            <!-- Password -->
            <label class="control-label"  for="source-link">Link to News Source</label>
            <div class="controls">
              <input type="text" id="link" name="link" placeholder="" class="input-xlarge" value="'.$array[0]['link'].'">
              <p class="help-block">Please provide the link to the source of the news item</p>
            </div>
          </div>

    <div class="control-group">
            <label for="category">News Category</label>
            <div class="controls">
            <select name="category">
              <option value="general">'.$category.'</option>
              <option value="business">Business</option>
              <option value="entertainment">Entertainment</option>
              <option value="sports">Sports</option>
              <option value="foreign">Foreign</option>
            </select> 
        </div>
    </div>

    <div class="control-group">
    <img class="myimg" id="im1" src="data:image/jpeg;base64, '.base64_encode($array[0]['related_image_1']).'" width="30%" alt="No image available">
                      
                           
            <label for="file">Make changes to related photo 1</label>
        <div class="controls">
             <input type="text" id="file1" name="file1" value = "'.$array[0]['related_image_name_1']. '" hidden />
            <input class="form-control" type=\'file\'   name="image1" id="image1"  placeholder="Click to upload image" accept="image/*"  />
            <input type="button" id="rm1" value="remove image" />
        </div>
    </div>

    <div class="control-group">
                      
    <img class="myimg" id="im2" src="data:image/jpeg;base64, '.base64_encode($array[0]['related_image_2']).'" width="30%" alt="No image available">
            <label for="file2">Make changes to related photo 2</label>
        <div class="controls">
        <input type="text" id="file2" name="file2" value = "'.$array[0]['related_image_name_2']. '" hidden />
            <input class="form-control" type=\'file\'   name="image2" id="image2"  placeholder="Click to upload image" accept="image/*"   />
            <input type="button" id="rm2" value="remove image" />
        </div>
    </div>


    <div class="control-group">
    <img class="myimg" id="im3" src="data:image/jpeg;base64, '.base64_encode($array[0]['related_image_3']).'" width="30%" alt="No image available">    
                           
            <label for="file">Make changes to related photo 3</label>
        <div class="controls">
        <input type="text" id="file3" name="file3" value = "'.$array[0]['related_image_name_3']. '" hidden />
            <input class="form-control" type=\'file\'   name="image3" id="image3"  placeholder="Click to upload image" accept="image/*"  />
            <input type="button" id="rm3" value="remove image" />
        </div>
    </div>


    <div class="control-group">
                      
    <img class="myimg" id="im4" src="data:image/jpeg;base64, '.base64_encode($array[0]['related_image_4']).'" width="30%" alt="No image available">               
            <label for="file">Make changes to related photo 4</label>
        <div class="controls">
        <input type="text" id="file4" name="file4" value = "'.$array[0]['related_image_name_4']. '" hidden />
            <input class="form-control" type=\'file\'   name="image4" id="image4"  placeholder="Click to upload image" accept="image/*"  />
            <input type="button" id="rm4" value="remove image" />
        </div>
    </div>



    <div class="control-group">
                      
    <img class="myimg" id="im5" src="data:image/jpeg;base64, '.base64_encode($array[0]['related_image_5']).'" width="30%" alt="No image available">
            <label for="file">Make changes to related photo 5</label>
        <div class="controls">
        <input type="text" id="file5" name="file5" value = "'.$array[0]['related_image_name_5']. '" hidden />
            <input class="form-control" type=\'file\'   name="image5" id="image5"  placeholder="Click to upload image" accept="image/*"   />
            <input type="button" id="rm5" value="remove image" />
        </div>
    </div>
 
    <div class="control-group">
                      
                           
            <label for="file">Make changes to related Video</label>
        <div class="controls">
        <input type="text" id="file6" name="file6" value = "'.$array[0]['related_video_name']. '" hidden />
            <input class="form-control" type=\'file\'   name="video" id="video" placeholder="Click to upload video" accept="video/*"   />
        </div>
    </div>
 
 


 
 
 
    <div class="control-group">
      <!-- Button -->
      <div class="controls">
        <button type="submit" class="btn btn-success" style="width:15%">Submit</button>
      </div>
    </div>
  </fieldset>
</form>
</body>
<script type="text/javascript">
function readURL(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();
				
				reader.onload = function (e) {
					$(\'#im1\').attr(\'src\', e.target.result);
				}
				reader.readAsDataURL(input.files[0]);
			}
		}
		$("#image1").change(function(){
            readURL(this);
            var filename = document.getElementById("image1");

             $(\'input[name=file1]\').val(filename.files.item(0).name);

        });
        
         $(document).ready(function(){
        $("#video").change(function(){
            var filename = document.getElementById("video");
            $(\'input[name=file6]\').val(filename.files.item(0).name);
        });
    });
        


 function readURL2(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();
				
				reader.onload = function (e) {
					$(\'#im2\').attr(\'src\', e.target.result);
				}
				reader.readAsDataURL(input.files[0]);
			}
		}
		$("#image2").change(function(){
            readURL2(this);
            var filename = document.getElementById("image2"); 
             $(\'input[name=file2]\').val(filename.files.item(0).name);
        });
        
        function readURL3(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();
				
				reader.onload = function (e) {
					$(\'#im3\').attr(\'src\', e.target.result);
				}
                reader.readAsDataURL(input.files[0]);
                
			}
		}
		$("#image3").change(function(){
            readURL3(this);
            var filename = document.getElementById("image3"); 
             $(\'input[name=file3]\').val(filename.files.item(0).name);
        });
        
        function readURL4(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();
				
				reader.onload = function (e) {
					$(\'#im4\').attr(\'src\', e.target.result);
				}
				reader.readAsDataURL(input.files[0]);
			}
		}
		$("#image4").change(function(){
            readURL4(this);
            var filename = document.getElementById("image4"); 
             $(\'input[name=file4]\').val(filename.files.item(0).name);
        });
        
        function readURL5(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();
				
				reader.onload = function (e) {
					$(\'#im5\').attr(\'src\', e.target.result);
				}
				reader.readAsDataURL(input.files[0]);
			}
		}
		$("#image5").change(function(){
            readURL5(this);
            var filename = document.getElementById("image5"); 
             $(\'input[name=file5]\').val(filename.files.item(0).name);
        });
        


       
			
		$("#rm1").click(function(){
            if(confirm("Are you sure you want to remove this image?")){
                $(\'#im1\').attr(\'src\', \'\');
                

            }else{

            }
            
        });
        
        $("#rm2").click(function(){
            if(confirm("Are you sure you want to remove this image?")){
                $(\'#im2\').attr(\'src\', \'\');
               
               
            }else{

            }
            
        });
        
        $("#rm3").click(function(){
            if(confirm("Are you sure you want to remove this image?")){
                $(\'#im3\').attr(\'src\', \'\');
            }else{

            }
            
        });
        
        $("#rm4").click(function(){
            if(confirm("Are you sure you want to remove this image?")){
                $(\'#im4\').attr(\'src\', \'\');
            }else{

            }
            
        });
        
        $("#rm5").click(function(){
            if(confirm("Are you sure you want to remove this image?")){
                $(\'#im5\').attr(\'src\', \'\');
            }else{

            }
            
		});
</script>'
?>
</html>
