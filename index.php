<!DOCTYPE html>
<meta charset='utf-8'>
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
a:hover{
  cursor:pointer;
}

#data-toggle{
  cursor:pointer;

}

    </style>



</head>
<?php

$num = 0;

$db = mysqli_connect("localhost","root","","general_news");
$sql = "select * from feed";
$var = $db->query($sql);
$array = array();
if ($var->num_rows > 0) {
    while($row = $var->fetch_assoc()) {
        $array[] = $row;
    }
} else {
    echo "0 results";
}
$itemcount = count($array);


$db2 = mysqli_connect("localhost","root","","general_news");
$sql2 = "select * from business";
$var2 = $db2->query($sql2);
$array2 = array();
if ($var2->num_rows > 0) {
    while($row2 = $var2->fetch_assoc()) {
        $array2[] = $row2;
    }
} else {
    echo "0 results";
}
$itemcount2 = count($array2);


$db3 = mysqli_connect("localhost","root","","general_news");
$sql3 = "select * from entertainment";
$var3 = $db3->query($sql3);
$array3 = array();
if ($var3->num_rows > 0) {
    while($row3 = $var3->fetch_assoc()) {
        $array3[] = $row3;
    }
} else {
    echo "0 results";
}
$itemcount3 = count($array3);

$db4 = mysqli_connect("localhost","root","","general_news");
$sql4 = "select * from sports";
$var4 = $db4->query($sql4);
$array4 = array();
if ($var4->num_rows > 0) {
    while($row4 = $var4->fetch_assoc()) {
        $array4[] = $row4;
    }
} else {
    echo "0 results";
}
$itemcount4 = count($array4);


$db5 = mysqli_connect("localhost","root","","general_news");
$sql5 = "select * from world";
$var5 = $db5->query($sql5);
$array5 = array();
if ($var5->num_rows > 0) {
    while($row5 = $var5->fetch_assoc()) {
        $array5[] = $row5;
    }
} else {
    echo "0 results";
}
$itemcount5 = count($array5);



$valop=0;
function gettotal($n){

  $valop=$n;

  return $n;

}




echo '<script type="text/javascript">




function getidcomm(x){
  var id;
 
   id = document.getElementsByClassName("id")[x].innerText;
   category = document.getElementsByClassName("category")[x].innerText;
   
   window.location.href = "allcomments.php?id=" + id +"&category="+ category;
  
  
 
  
    
}
function getidcomm2(x){
  var id;
 
   id = document.getElementsByClassName("id2")[x].innerText;
   category = document.getElementsByClassName("category2")[x].innerText;
   
   window.location.href = "allcomments.php?id=" + id +"&category="+ category;
  
  
 
  
    
}

function getidcomm3(x){
  var id;
 
   id = document.getElementsByClassName("id3")[x].innerText;
   category = document.getElementsByClassName("category3")[x].innerText;
   
   window.location.href = "allcomments.php?id=" + id +"&category="+ category;
  
  
 
  
    
}
function getidcomm4(x){
  var id;
 
   id = document.getElementsByClassName("id4")[x].innerText;
   category = document.getElementsByClassName("category4")[x].innerText;
   
   window.location.href = "allcomments.php?id=" + id +"&category="+ category;
  
  
 
  
    
}
function getidcomm5(x){
  var id;
 
   id = document.getElementsByClassName("id5")[x].innerText;
   category = document.getElementsByClassName("category5")[x].innerText;
   
   window.location.href = "allcomments.php?id=" + id +"&category="+ category;
  
  
 
  
    
}

function getid(x){
   var id;
  
    id = document.getElementsByClassName("id")[x].innerText;
    category = document.getElementsByClassName("category")[x].innerText;
    
    headline = document.getElementsByClassName("headline")[x].innerText;
    
    window.location.href = "post.php?id=" + id +"&category="+ category + "&headline="+ headline;
   
   
   
  
   
     
}
function getid2(x){
  var id;
 
   id = document.getElementsByClassName("id2")[x].innerText;
   
   category = document.getElementsByClassName("category2")[x].innerText;
    
   headline = document.getElementsByClassName("headline2")[x].innerText;
    
   window.location.href = "post.php?id=" + id +"&category="+ category + "&headline="+ headline;
  
  
 
  
    
}
function getid3(x){
  var id;
 
   id = document.getElementsByClassName("id3")[x].innerText;
   category = document.getElementsByClassName("category3")[x].innerText;
    
   headline = document.getElementsByClassName("headline3")[x].innerText;
    
   window.location.href = "post.php?id=" + id +"&category="+ category + "&headline="+ headline;
  
 
  
    
}

function getid4(x){
  var id;
 
   id = document.getElementsByClassName("id4")[x].innerText;
   
   category = document.getElementsByClassName("category4")[x].innerText;
    
   headline = document.getElementsByClassName("headline4")[x].innerText;
    
    window.location.href = "post.php?id=" + id +"&category="+ category + "&headline="+ headline;
   
  
 
  
    
}

function getid5(x){
  var id;
 
   id = document.getElementsByClassName("id5")[x].innerText;
   
   category = document.getElementsByClassName("category5")[x].innerText;

   headline = document.getElementsByClassName("headline5")[x].innerText;
    
    window.location.href = "post.php?id=" + id +"&category="+ category + "&headline="+ headline;
   
  
 
  
    
}



</script>';

echo '
<body>





  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
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

            <h3 class="post-subtitle">
            You might like:
            </h3>
            
          </a>
          
          <p class="post-meta">
             March 27, 2019</p>
           
        </div>
        <hr>';
        for ($x=0;$x<$itemcount;$x++){
          echo('

        <img class="myimg" src="data:image/jpeg;base64, '.base64_encode($array[$x]['related_image_1']).'" width="30%" >
        <div class="post-preview">
          <a href="javascript:void(0);">
            
            <h2 class="post-title" onclick="getid('.$x.')">
            '.$array[$x]['headline'].'
            
            
            </h2>
            
            
          </a>
         
         
          ');

          $my_arrayer = array();
          $my_arrayer = $array[$x]['news_id'];

          
          $comm_dber = mysqli_connect("localhost","root","","general_news");
          $comm_sqler = "select * from comments where news_id=$my_arrayer[0] ";
         $comm_varer = $comm_dber->query($comm_sqler);
         $comm_arrayer = array();

         if ($comm_varer->num_rows > 0) {
    
         while($comm_rower = $comm_varer->fetch_assoc()) {
          $comm_arrayer[] = $comm_rower;
          
         
       }
         } else {

        }

        $comm_itemcounter = count($comm_arrayer);
          echo('
          <a class="accordion" >Comments <i class="fas fa-comment"></i>'.$comm_itemcounter.'</a>
          <div class="panel">');

          $my_array = array();
          $my_array = $array[$x]['news_id'];

          
          $comm_db = mysqli_connect("localhost","root","","general_news");
          $comm_sql = "select * from comments where news_id=$my_array[0] LIMIT 5 ";
         $comm_var = $comm_db->query($comm_sql);
         $comm_array = array();

         if ($comm_var->num_rows > 0) {
    
         while($comm_row = $comm_var->fetch_assoc()) {
          $comm_array[] = $comm_row;
         
       }
         } else {

        }

        $comm_itemcount = count($comm_array);
        
         

        
        
        //echo $comm_itemcount;
     

      for ($b=0;$b<$comm_itemcount;$b++){
        echo('<p>Name: '.$comm_array[$b]['name'].'</p>
        <p>Comment: '.$comm_array[$b]['message'].'</p>
        
        <hr>
        '
        

        
      
      );

      }


          
         echo('
         



         <div class="clearfix">
         <a class="btn btn-primary float-right" onclick="getidcomm('.$x.')">All comments &rarr;</a>
       </div>
                
                  </div>

                  
                
          <p class="post-meta">Posted by
            <a href="#"> '.$array[$x]['source'].'</a>
            on  '.$array[$x]['date_published'].'</p>
            <h5 class="id" hidden>'.$array[$x]['news_id'].'</h5>
            <p class="category" hidden>'.$array[$x]['category'].'</p>
            <p class="headline" hidden>'.$array[$x]['headline'].'</p>
        </div>
        <hr>
        ');
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
              You might like:
            </h3>
          </a>
          <p class="post-meta">Posted by
            <a href="#">GH Magazine</a>
            on September 24, 2019</p>
        </div>
        <hr>';

        for ($v=0;$v<$itemcount2;$v++){
          echo('
        <img class="myimg" src="data:image/jpeg;base64, '.base64_encode($array2[$v]['related_image_1']).'" width="30%">
        <div class="post-preview">
        <a href="javascript:void(0);" >
            <h2 class="post-title" onclick="getid2('.$v.')">
            '.$array2[$v]['headline'].'
            </h2>
          </a>');

          $my_arrayer = array();
          $my_arrayer = $array2[$v]['news_id'];

          
          $comm_dber = mysqli_connect("localhost","root","","general_news");
          $comm_sqler = "select * from business_comments where news_id=$my_arrayer[0] ";
         $comm_varer = $comm_dber->query($comm_sqler);
         $comm_arrayer = array();

         if ($comm_varer->num_rows > 0) {
    
         while($comm_rower = $comm_varer->fetch_assoc()) {
          $comm_arrayer[] = $comm_rower;
          
         
       }
         } else {

        }

        $comm_itemcounter = count($comm_arrayer);
          echo('
          <a class="accordion" >Comments <i class="fas fa-comment"></i>'.$comm_itemcounter.'</a>
          <div class="panel">');


          $my_array = array();
          $my_array = $array2[$v]['news_id'];

          
          $comm_db = mysqli_connect("localhost","root","","general_news");
          $comm_sql = "select * from business_comments where news_id=$my_array[0] LIMIT 5";
         $comm_var = $comm_db->query($comm_sql);
         $comm_array = array();

         if ($comm_var->num_rows > 0) {
    
         while($comm_row = $comm_var->fetch_assoc()) {
          $comm_array[] = $comm_row;
         
       }
         } else {

        }

        $comm_itemcount = count($comm_array);
        //echo $comm_itemcount;
     

      for ($b=0;$b<$comm_itemcount;$b++){
        echo('<p>Name: '.$comm_array[$b]['name'].'</p>
        <p>Comment: '.$comm_array[$b]['message'].'</p><hr>'
      
      );

      }
                
         echo('

         <div class="clearfix">
         <a class="btn btn-primary float-right" onclick="getidcomm2('.$v.')">All comments &rarr;</a>
         </div>
                  </div>
          <p class="post-meta">Posted by
            <a href="#"> '.$array2[$v]['source'].'</a>
            on  '.$array2[$v]['date_published'].'</p>
            <h5 class="id2" hidden>'.$array2[$v]['news_id'].'</h5>
            <p class="category2" hidden>'.$array2[$v]['category'].'</p>
            <p class="headline2" hidden>'.$array2[$v]['headline'].'</p>
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
            You might like:
            </h3>
          </a>
          <p class="post-meta">Posted by
            <a href="#">Ghnews.com</a>
            on September 24, 2019</p>
        </div>
        <hr>';


        for ($c=0;$c<$itemcount3;$c++){
          echo('
        <img class="myimg" src="data:image/jpeg;base64, '.base64_encode($array3[$c]['related_image_1']).'" width="30%">
        <div class="post-preview">
        <a href="javascript:void(0);" >
            <h2 class="post-title" onclick="getid3('.$c.')">
            '.$array3[$c]['headline'].'
            </h2>
          </a>');

          $my_arrayer = array();
          $my_arrayer = $array3[$c]['news_id'];

          
          $comm_dber = mysqli_connect("localhost","root","","general_news");
          $comm_sqler = "select * from entertainment_comments where news_id=$my_arrayer[0] ";
         $comm_varer = $comm_dber->query($comm_sqler);
         $comm_arrayer = array();

         if ($comm_varer->num_rows > 0) {
    
         while($comm_rower = $comm_varer->fetch_assoc()) {
          $comm_arrayer[] = $comm_rower;
          
         
       }
         } else {

        }

        $comm_itemcounter = count($comm_arrayer);
          echo('
          <a class="accordion" >Comments <i class="fas fa-comment"></i>'.$comm_itemcounter.'</a>
          <div class="panel">');

          $my_array = array();
          $my_array = $array3[$c]['news_id'];

          
          $comm_db = mysqli_connect("localhost","root","","general_news");
          $comm_sql = "select * from entertainment_comments where news_id=$my_array[0] LIMIT 5 ";
         $comm_var = $comm_db->query($comm_sql);
         $comm_array = array();

         if ($comm_var->num_rows > 0) {
    
         while($comm_row = $comm_var->fetch_assoc()) {
          $comm_array[] = $comm_row;
         
       }
         } else {

        }

        $comm_itemcount = count($comm_array);
        //echo $comm_itemcount;
     

      for ($b=0;$b<$comm_itemcount;$b++){
        echo('<p>Name: '.$comm_array[$b]['name'].'</p>
        <p>Comment: '.$comm_array[$b]['message'].'</p><hr>'
      
      );

      }
                
        

          echo('
          <div class="clearfix">
          <a class="btn btn-primary float-right" onclick="getidcomm3('.$c.')">All comments &rarr;</a>
        </div>
                  </div>
          <p class="post-meta">Posted by
            <a href="#">'.$array3[$c]['source'].'</a>
            on '.$array3[$c]['date_published'].'</p>
            <p class="id3" hidden>'.$array3[$c]['news_id'].'</p>
            <p class="category3" hidden>'.$array3[$c]['category'].'</p>
            <p class="headline3" hidden>'.$array3[$c]['headline'].'</p>
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
            You might like:
            </h3>
          </a>
          <p class="post-meta">Posted by
            <a href="#">Ghanasoccernet.com</a>
            on September 24, 2019</p>
        </div>
        <hr>';

        for ($x=0;$x<$itemcount4;$x++){
          echo('
        <img class="myimg" src="data:image/jpeg;base64, '.base64_encode($array4[$x]['related_image_1']).'" width="30%">
        <div class="post-preview">
        <a href="javascript:void(0);" >
            <h2 class="post-title" onclick="getid4('.$x.')">
            '.$array4[$x]['headline'].'
            </h2>
          </a>');
          $my_arrayer = array();
          $my_arrayer = $array4[$x]['news_id'];

          
          $comm_dber = mysqli_connect("localhost","root","","general_news");
          $comm_sqler = "select * from sports_comments where news_id=$my_arrayer[0] ";
         $comm_varer = $comm_dber->query($comm_sqler);
         $comm_arrayer = array();

         if ($comm_varer->num_rows > 0) {
    
         while($comm_rower = $comm_varer->fetch_assoc()) {
          $comm_arrayer[] = $comm_rower;
          
         
       }
         } else {

        }

        $comm_itemcounter = count($comm_arrayer);
          echo('
          <a class="accordion" >Comments <i class="fas fa-comment"></i>'.$comm_itemcounter.'</a>
          <div class="panel">');

          $my_array = array();
          $my_array = $array4[$x]['news_id'];

          
          $comm_db = mysqli_connect("localhost","root","","general_news");
          $comm_sql = "select * from sports_comments where news_id=$my_array[0] LIMIT 5 ";
         $comm_var = $comm_db->query($comm_sql);
         $comm_array = array();

         if ($comm_var->num_rows > 0) {
    
         while($comm_row = $comm_var->fetch_assoc()) {
          $comm_array[] = $comm_row;
         
       }
         } else {

        }

        $comm_itemcount = count($comm_array);
        //echo $comm_itemcount;
     

      for ($b=0;$b<$comm_itemcount;$b++){
        echo('<p>Name: '.$comm_array[$b]['name'].'</p>
        <p>Comment: '.$comm_array[$b]['message'].'</p><hr>'
      
      );

      }
                
        

        

          echo('
          <div class="clearfix">
          <a class="btn btn-primary float-right" onclick="getidcomm4('.$x.')">All comments &rarr;</a>
        </div>
                  </div>
          <p class="post-meta">Posted by
            <a href="#">'.$array4[$x]['source'].'</a>
            on '.$array4[$x]['date_published'].'</p>
            <p class="id4" hidden>'.$array4[$x]['news_id'].'</p>
            <p class="category4" hidden>'.$array4[$x]['category'].'</p>
            <p class="headline4" hidden>'.$array4[$x]['headline'].'</p>
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
              You might like:
            </h3>
          </a>
          <p class="post-meta">Posted by
            <a href="#">CNN.com/news</a>
            on September 24, 2019</p>
        </div>
        <hr>';
        for ($x=0;$x<$itemcount5;$x++){
          echo('
        <img class="myimg" src="data:image/jpeg;base64, '.base64_encode($array5[$x]['related_image_1']).'" width="30%">
        <div class="post-preview">
        <a href="javascript:void(0);">
            <h2 class="post-title" onclick="getid5('.$x.')">
            '.$array5[$x]['headline'].'
            </h2>
          </a>');
          $my_arrayer = array();
          $my_arrayer = $array5[$x]['news_id'];

          
          $comm_dber = mysqli_connect("localhost","root","","general_news");
          $comm_sqler = "select * from world_comments where news_id=$my_arrayer[0] ";
         $comm_varer = $comm_dber->query($comm_sqler);
         $comm_arrayer = array();

         if ($comm_varer->num_rows > 0) {
    
         while($comm_rower = $comm_varer->fetch_assoc()) {
          $comm_arrayer[] = $comm_rower;
          
         
       }
         } else {

        }

        $comm_itemcounter = count($comm_arrayer);
          echo('
          <a class="accordion" >Comments <i class="fas fa-comment"></i>'.$comm_itemcounter.'</a>
          <div class="panel">');

         
          $my_array = array();
          $my_array = $array5[$x]['news_id'];

          
          $comm_db = mysqli_connect("localhost","root","","general_news");
          $comm_sql = "select * from world_comments where news_id=$my_array[0] LIMIT 5";
         $comm_var = $comm_db->query($comm_sql);
         $comm_array = array();

         if ($comm_var->num_rows > 0) {
    
         while($comm_row = $comm_var->fetch_assoc()) {
          $comm_array[] = $comm_row;
         
       }
         } else {

        }

        $comm_itemcount = count($comm_array);
        //echo $comm_itemcount;
     

      for ($b=0;$b<$comm_itemcount;$b++){
        echo('<p>Name: '.$comm_array[$b]['name'].'</p>
        <p>Comment: '.$comm_array[$b]['message'].'</p><hr>'
      
      );

      }
                
         echo('
         <div class="clearfix">
         <a class="btn btn-primary float-right" onclick="getidcomm5('.$x.')">All comments &rarr;</a>
       </div>
                  </div>
          <p class="post-meta">Posted by
            <a href="#">'.$array5[$x]['source'].'</a>
            on '.$array5[$x]['date_published'].'</p>
            <p class="id5" hidden>'.$array5[$x]['news_id'].'</p>
            <p class="category5" hidden>'.$array5[$x]['category'].'</p>
            <p class="headline5" hidden>'.$array5[$x]['headline'].'</p>
        </div>
        <hr>');
        }

        echo'
       
        <!-- Pager -->
        <div class="clearfix">
          <a class="btn btn-primary float-right" href="world.php">Read More &rarr;</a>
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


$(document).ready(function(){
$(\'[data-toggle="popover"]\').popover();
});
</script>


</body>';
?>
</html>
