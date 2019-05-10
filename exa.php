

<!DOCTYPE html>
<html>
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


<!-- MAIN (Center website) -->

<!-- Portfolio Gallery Grid -->
<?php
$db = mysqli_connect("localhost","root","","general_news");

$sql = "select * from feed";
$sql_men = "select * from business";
$sql_women = "select * from entertainment";
$sql_couple = "select * from sports";
$sql_children = "select * from world";
$var = $db->query($sql);
$var_men = $db->query($sql_men);
$var_women = $db->query($sql_women);
$var_couple = $db->query($sql_couple);
$var_children = $db->query($sql_children);
//$result = mysqli_fetch_array($var);

$array = array();
$array_men = array();
$array_women = array();
$array_couple = array();
$array_children = array();

if ($var->num_rows > 0) {
    // output data of each row
    while($row = $var->fetch_assoc()) {
        $array[] = $row;
        //echo '<img src="data:image/jpeg;base64, '.base64_encode($row['itemimage']).'"/>';
    }
} else {
    echo "0 results";
}


if ($var_men->num_rows > 0) {
  // output data of each row
  while($row_men = $var_men->fetch_assoc()) {
      $array_men[] = $row_men;
      //echo '<img src="data:image/jpeg;base64, '.base64_encode($row['itemimage']).'"/>';
  }
} else {
 
}

if ($var_women->num_rows > 0) {
  // output data of each row
  while($row_women = $var_women->fetch_assoc()) {
      $array_women[] = $row_women;
      //echo '<img src="data:image/jpeg;base64, '.base64_encode($row['itemimage']).'"/>';
  }
} else {
 
}


if ($var_couple->num_rows > 0) {
  // output data of each row
  while($row_couple = $var_couple->fetch_assoc()) {
      $array_couple[] = $row_couple;
      //echo '<img src="data:image/jpeg;base64, '.base64_encode($row['itemimage']).'"/>';
  }
} else {
 
}


if ($var_children->num_rows > 0) {
  // output data of each row
  while($row_children= $var_children->fetch_assoc()) {
      $array_children[] = $row_children;
      //echo '<img src="data:image/jpeg;base64, '.base64_encode($row['itemimage']).'"/>';
  }
} else {
 
}


$itemcount = count($array);
$item_men = count($array_men);
$item_women = count($array_women);
$item_couple = count($array_couple);
$item_children = count($array_children);


echo '<script type="text/javascript">

function getid(x){
   var id;
  
    id = document.getElementsByClassName("id")[x].innerText;
    window.location.href = "post.php?id=" + id;
   
  
   
     
}


</script>';
echo'<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
<div class="container">
  <a class="navbar-brand" href="index.php">Ghnews</a>
  <a class="navbar-brand" href="#headlines">Latest</a>
  <a class="navbar-brand" href="#business">Business</a>
  <a class="navbar-brand" href="#entertainment">Entertainment</a>
  <a class="navbar-brand" href="#sports">Sports</a>
  <a class="navbar-brand" href="#world">World</a>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
    Menu
    <i class="fas fa-bars"></i>
  </button>
  <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav ml-auto">
     
      <li class="nav-item">
        <a class="nav-link" href="about.html">About</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="contact.html">Contact</a>
      </li>
    </ul>
  </div>
</div>
</nav>

<!-- Page Header -->
<header class="masthead" style="background-image: url(\'img/globe.jpg\')">
<div class="overlay"></div>
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
      <div class="site-heading">
        <h1>Breaking</h1>
        <span class="subheading">Ghnews</span>
      </div>
    </div>
  </div>
</div>
</header>

<!-- Main Content -->

<div id = "headlines">
<div class="container">
<div class="row">
  <div class="col-lg-8 col-md-10 mx-auto">
    <div class="post-preview">
      <a href="post.html">
        <h1 class="post-title" style="color:darkgoldenrod">
          News headlines of the day
        </h1>
        
      </a>
      
      <p class="post-meta">
         March 27, 2019</p>
       
    </div>
    <hr>';

echo '<div class="row">';
for ($x=0;$x<$itemcount;$x++){
  echo('
  <img class="myimg" src="data:image/jpeg;base64, '.base64_encode($array[$x]['related_image_1']).'" width="30%" >
  <div class="post-preview" onclick="getid('.$x.')">
    <a href="javascript:void(0);">
      
      <h2 class="post-title" onclick="getid('.$x.')">
      '.$array[$x]['headline'].'
      </h2>
    </a>
    <a class="accordion" >Comments <i class="fas fa-comment"></i> 100</a>
    <div class="panel">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
          
    <p class="post-meta">Posted by
      <a href="#"> '.$array[$x]['source'].'</a>
      on  '.$array[$x]['date_published'].'</p>
      <h5 class="id" >'.$array[$x]['news_id'].'</h5>
      <p class="category" >'.$array[$x]['category'].'</p>
  </div>
  <hr>');
}
echo '
<!-- Pager -->
<div class="clearfix">
  <a class="btn btn-primary float-right" href="headlines.php">Read More &rarr;</a>
</div>
</div>
</div>
</div>
</div>

<div id = "business">
<div class="container">
<div class="row">
<div class="col-lg-8 col-md-10 mx-auto">
<div class="post-preview">
  <a href="post.html">
    <h1 class="post-title" style="color:darkgoldenrod">
      Business News
    </h1>
    <h3 class="post-subtitle">
      Problems look mighty small from 150 miles up
    </h3>
  </a>
  <p class="post-meta">Posted by
    <a href="#">GH Magazine</a>
    on September 24, 2019</p>
</div>
<hr>';


for ($k=0;$k<$item_men;$k++){
    echo('
    <img class="myimg" src="data:image/jpeg;base64, '.base64_encode($array_men[$k]['related_image_1']).'" width="30%">
    <div class="post-preview" onclick="getid('.$k.')">
    <a href="javascript:void(0);" >
        <h2 class="post-title">
        '.$array_men[$k]['headline'].'
        </h2>
      </a>
      <a href="">Comments <i class="fas fa-comment"></i> 2</a>
      <p class="post-meta">Posted by
        <a href="#"> '.$array_men[$k]['source'].'</a>
        on  '.$array_men[$k]['date_published'].'</p>
        <h5 class="id" >'.$array_men[$k]['news_id'].'</h5>
        <p class="category" >'.$array_men[$k]['category'].'</p>
    </div>
    <hr>');
}
echo'
<!-- Pager -->
<div class="clearfix">
  <a class="btn btn-primary float-right" href="business.php">Read More &rarr;</a>
</div>
</div>
</div>
</div>
</div>


<div id= "entertainment">
<div class="container">
<div class="row">
<div class="col-lg-8 col-md-10 mx-auto">

<div class="post-preview">
  <a href="post.html">
    <h1 class="post-title" style="color:darkgoldenrod">
      Entertainment news
    </h1>
    <h3 class="post-subtitle">
      Problems look mighty small from 150 miles up
    </h3>
  </a>
  <p class="post-meta">Posted by
    <a href="#">Ghnews.com</a>
    on September 24, 2019</p>
</div>
<hr>';

for ($v=0;$v<$item_women;$v++){
    echo('
    <img class="myimg" src="data:image/jpeg;base64, '.base64_encode($array_women[$v]['related_image_1']).'" width="30%">
    <div class="post-preview">
    <a href="javascript:void(0);" onclick="getid('.$v.')">
        <h2 class="post-title">
        '.$array_women[$v]['headline'].'
        </h2>
      </a>
      <a href="">Comments <i class="fas fa-comment"></i> 1200</a>
      <p class="post-meta">Posted by
        <a href="#">'.$array_women[$v]['source'].'</a>
        on '.$array_women[$v]['date_published'].'</p>
        <p class="id" >'.$array_women[$v]['news_id'].'</p>
        <p class="category" >'.$array_women[$v]['category'].'</p>
    </div>
   
    <hr>');
}
echo'
<!-- Pager -->
<div class="clearfix">
  <a class="btn btn-primary float-right" href="entertainment.php">Read More &rarr;</a>
</div>
</div>
</div>
</div>
</div>


<div id= "sports">
<div class="container">
<div class="row">
<div class="col-lg-8 col-md-10 mx-auto">
<div class="post-preview">
  <a href="post.html">
    <h1 class="post-title" style="color:darkgoldenrod">
      Sports News
    </h1>
    <h3 class="post-subtitle">
      Problems look mighty small from 150 miles up
    </h3>
  </a>
  <p class="post-meta">Posted by
    <a href="#">Ghanasoccernet.com</a>
    on September 24, 2019</p>
</div>
<hr>';


for ($m=0;$m<$item_children;$m++){
    echo('
    <img class="myimg" src="data:image/jpeg;base64, '.base64_encode($array_children[$m]['related_image_1']).'" width="30%">
    <div class="post-preview">
    <a href="javascript:void(0);" onclick="getid('.$m.')">
        <h2 class="post-title">
        '.$array_children[$m]['headline'].'
        </h2>
      </a>
      <a href="">Comments <i class="fas fa-comment"></i> 100</a>
      <p class="post-meta">Posted by
        <a href="#">'.$array_children[$m]['source'].'</a>
        on '.$array_children[$m]['date_published'].'</p>
        <p class="id" >'.$array_children[$m]['news_id'].'</p>
        <p class="category" >'.$array_children[$m]['category'].'</p>
    </div>
    <hr>');
}

echo'
        
<!-- Pager -->
<div class="clearfix">
  <a class="btn btn-primary float-right" href="sports.php">Read More &rarr;</a>
</div>
</div>
</div>
</div>
</div>

<div id= "world">
<div class="container">
<div class="row">
<div class="col-lg-8 col-md-10 mx-auto">
<div class="post-preview">
  <a href="post.html">
    <h1 class="post-title" style="color:darkgoldenrod">
      Foreign news
    </h1>
    <h3 class="post-subtitle">
      Problems look mighty small from 150 miles up
    </h3>
  </a>
  <p class="post-meta">Posted by
    <a href="#">CNN.com/news</a>
    on September 24, 2019</p>
</div>
<hr>';


for ($p=0;$p<$item_couple;$p++){
    echo('
    <img class="myimg" src="data:image/jpeg;base64, '.base64_encode($array_couple[$p]['related_image_1']).'" width="30%">
    <div class="post-preview">
    <a href="javascript:void(0);" onclick="getid('.$p.')">
        <h2 class="post-title">
        '.$array_couple[$p]['headline'].'
        </h2>
      </a>
      <a href="">Comments <i class="fas fa-comment"></i> 50</a>
      <p class="post-meta">Posted by
        <a href="#">'.$array_couple[$p]['source'].'</a>
        on '.$array_couple[$p]['date_published'].'</p>
        <p class="id" >'.$array_couple[$p]['news_id'].'</p>
        <p class="category" >'.$array_couple[$p]['category'].'</p>
    </div>
    <hr>');
}

echo'
       
<!-- Pager -->
<div class="clearfix">
  <a class="btn btn-primary float-right" href="foreign.php">Read More &rarr;</a>
</div>
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
</script>';



?>








</html>
