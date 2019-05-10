<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Ghnews</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/clean-blog.min.css" rel="stylesheet">

  <style>
.panel {
  padding: 0 18px;
  display: none;
  background-color: white;
  overflow: hidden;
}

.accordion{
  cursor:pointer;
}


    </style>



</head>
<?php 

$myval = $_GET['id'];
$category = $_GET['category'];





switch($category){
  case "feed":
  $db = mysqli_connect("localhost","root","","general_news");

$sql = "select * from feed where news_id = $myval";

$var = $db->query($sql);

$array = array();

if ($var->num_rows > 0) {
    
    while($row = $var->fetch_assoc()) {
        $array[] = $row;
        //echo '<img src="data:image/jpeg;base64, '.base64_encode($row['itemimage']).'"/>';
    }
} else {
    
}

$db2 = mysqli_connect("localhost","root","","general_news");
$sql2 = "select * from comments where news_id = $myval";
$var2 = $db2->query($sql2);
$array2 = array();

if ($var2->num_rows > 0) {
    
  while($row2 = $var2->fetch_assoc()) {
      $array2[] = $row2;
      //echo '<img src="data:image/jpeg;base64, '.base64_encode($row['itemimage']).'"/>';
  }
} else {

}

$itemcount = count($array2);




break;

  case "business":

  $db = mysqli_connect("localhost","root","","general_news");

  $sql = "select * from business where news_id = $myval";
  $var = $db->query($sql);
  $array = array();
  
  if ($var->num_rows > 0) {
      
      while($row = $var->fetch_assoc()) {
          $array[] = $row;
          //echo '<img src="data:image/jpeg;base64, '.base64_encode($row['itemimage']).'"/>';
      }
  } else {
      
  }

  $db2 = mysqli_connect("localhost","root","","general_news");
$sql2 = $sql2 = "select * from business_comments where news_id = $myval";
$var2 = $db2->query($sql2);
$array2 = array();

if ($var2->num_rows > 0) {
    
  while($row2 = $var2->fetch_assoc()) {
      $array2[] = $row2;
      //echo '<img src="data:image/jpeg;base64, '.base64_encode($row['itemimage']).'"/>';
  }
} else {
  
}

$itemcount = count($array2);
  break;

  case "entertainment":

  $db = mysqli_connect("localhost","root","","general_news");

  $sql = "select * from entertainment where news_id = $myval";
  $var = $db->query($sql);
  $array = array();
  
  if ($var->num_rows > 0) {
      
      while($row = $var->fetch_assoc()) {
          $array[] = $row;
          //echo '<img src="data:image/jpeg;base64, '.base64_encode($row['itemimage']).'"/>';
      }
  } else {
      
  }
  $db2 = mysqli_connect("localhost","root","","general_news");
  $sql2 = $sql2 = "select * from entertainment_comments where news_id=$myval";
  $var2 = $db2->query($sql2);
  $array2 = array();
  
  if ($var2->num_rows > 0) {
      
    while($row2 = $var2->fetch_assoc()) {
        $array2[] = $row2;
        //echo '<img src="data:image/jpeg;base64, '.base64_encode($row['itemimage']).'"/>';
    }
  } else {
    
  }
  
  $itemcount = count($array2);
  break;

  case "sports":
  $db = mysqli_connect("localhost","root","","general_news");

  $sql = "select * from sports where news_id = $myval";
  $var = $db->query($sql);
  $array = array();
  
  if ($var->num_rows > 0) {
      
      while($row = $var->fetch_assoc()) {
          $array[] = $row;
          //echo '<img src="data:image/jpeg;base64, '.base64_encode($row['itemimage']).'"/>';
      }
  } else {
      
  }

  $db2 = mysqli_connect("localhost","root","","general_news");
$sql2 = $sql2 = "select * from sports_comments where news_id=$myval";
$var2 = $db2->query($sql2);
$array2 = array();

if ($var2->num_rows > 0) {
    
  while($row2 = $var2->fetch_assoc()) {
      $array2[] = $row2;
      //echo '<img src="data:image/jpeg;base64, '.base64_encode($row['itemimage']).'"/>';
  }
} else {
  
}

$itemcount = count($array2);
  break;

  case "world":

  $db = mysqli_connect("localhost","root","","general_news");

  $sql = "select * from world where news_id = $myval";
  $var = $db->query($sql);
  $array = array();
  
  if ($var->num_rows > 0) {
      
      while($row = $var->fetch_assoc()) {
          $array[] = $row;
          //echo '<img src="data:image/jpeg;base64, '.base64_encode($row['itemimage']).'"/>';
      }
  } else {
  
  }

  $db2 = mysqli_connect("localhost","root","","general_news");
$sql2 = $sql2 = "select * from world_comments where news_id=$myval";
$var2 = $db2->query($sql2);
$array2 = array();

if ($var2->num_rows > 0) {
    
  while($row2 = $var2->fetch_assoc()) {
      $array2[] = $row2;
      //echo '<img src="data:image/jpeg;base64, '.base64_encode($row['itemimage']).'"/>';
  }
} else {
  
}

$itemcount = count($array2);
  break;


}








echo '<script type="text/javascript">



function getid(){
 
   
  
    var category = document.getElementById("category").innerText;
    window.location.href = "Mail/comments.php?category=" + category;
    
}


</script>';


echo'
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
  <div class="container">
    <a class="navbar-brand" href="index.php">Ghnews</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      Menu
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.html">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="post.html">Trivia</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.html">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
  
 

  <!-- Post Content -->
  
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">

            
            
  
        
        <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <p>Leave a comment on this article?</p>
       
        <form name="sentMessage" id="contactForm" novalidate>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Name</label>
              <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          
          
          <div class="control-group">
          <input type="text" id="id" value="'.$array[0]['news_id'].'" hidden >
          <input type="text" id="category" value="'.$array[0]['category'].'"   hidden >
            <div class="form-group floating-label-form-group controls">
              <label>Message</label>
              <textarea rows="5" class="form-control" placeholder="Comment" id="message" required data-validation-required-message="Please enter a message."></textarea>
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <br>
          <div id="success"></div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary" id="sendMessageButton">Add Comment</button>
          </div>
        </form>
      </div>
    </div>';
    
    for ($x=0;$x<$itemcount;$x++){
      echo('
       <p>Name: '.$array2[$x]['name'].'</p>

      <p>Comment: '.$array2[$x]['message'].'</p>
      <p><a href=#><i class="fa fa-reply" >Reply</i></a></p>
      
      <hr>'

    );
  }
  echo '
    </div>
    
  

          </div>
        

        </div>
      </div>
    

  
  <hr>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
          <p class="copyright text-muted">Copyright &copy; VIT consults 2019</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>

 

          <script>
              var acc = document.getElementsByClassName("accordion");
              var i;
              
              for (i = 0; i < acc.length; i++) {
                acc[i].addEventListener("click", function() {
                  this.classList.toggle("active");
                  var panel = this.nextElementSibling;
                  if (panel.style.display === "block") {
                    panel.style.display = "none";
                  } else {
                    panel.style.display = "block";
                  }
                });
              }
              </script>
        

</body>'
?>
 <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/comment.js"></script>

</html>
