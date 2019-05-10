
<link rel = "stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<link rel = "stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
    
    </script>

    <style>
         a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}

a:hover {
  background-color: #ddd;
  color: black;
}

.previous {
  background-color: #f1f1f1;
  color: black;
}

.next {
  background-color: #4CAF50;
  color: white;
}

.round {
  border-radius: 50%;
}
    </style>

<?php
$db = mysqli_connect("localhost","root","","general_news");

$sql = "select * from business";
$var = $db->query($sql);


$array = array();
if ($var->num_rows > 0) {
    // output data of each row
    while($row = $var->fetch_assoc()) {
        $array[] = $row;
        //echo '<img src="data:image/jpeg;base64, '.base64_encode($row['itemimage']).'"/>';
    }
} else {
    echo "0 results";
}

$itemcount = count($array);




echo '<script type="text/javascript">

function deleterow(x){
   var id;
   if(confirm("Are you sure you want to delete the selected row?")){
    id = document.getElementsByClassName("id")[x].innerText;
    window.location.href = "http://localhost/mynews/crud/delete.php?id=" + id +"&category="+ category;
   
  
   }else{
    
   }
     
}
function updaterow(x){

  id = document.getElementsByClassName("id")[x].innerText;
  category = document.getElementsByClassName("category")[x].innerText;
  
  window.location.href = "http://localhost/mynews/crud/update_news.php?id=" + id +"&category="+ category;

}

</script>';

echo '
<a href="general_news_records.php" class="previous">&laquo; Previous</a>
<a href="entertainment_news_records.php" class="next">Next &raquo;</a>
<h3>Showing entry for business news items</h3>
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>News ID</th>
                <th>Headline</th>
                
                <th>Source</th>
                <th>Source link</th>
                <th>Date_Published</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>';
       

        
        for ($x=0;$x<$itemcount;$x++){
            echo
             ('<tr>
             <td class ="id">'.$array[$x]['news_id'].'</td>
             <td contenteditable="true">'.$array[$x]['headline'].'</td>
             
             <td contenteditable="true">'.$array[$x]['source'].'</td>
             <td contenteditable="true">'.$array[$x]['link'].'</td>
             <td>'.$array[$x]['date_published'].'</td>
             <td class ="category" hidden>'.$array[$x]['category'].'</td>
             <td><button onclick="deleterow('.$x.')">Delete</button><button onclick="updaterow('.$x.')">Update</button></td>'
             
             );
            
        }
       echo  '</tr>
       
         
        
    </table>
    ';

    
   
    ?>


