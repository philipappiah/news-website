<?php
// Check for empty fields
if(empty($_POST['name'])      ||
   
   empty($_POST['message'])   
   )
   {
   echo "No arguments Provided!";
   
   }


   
$name = strip_tags(htmlspecialchars($_POST['name']));
//$email_address = strip_tags(htmlspecialchars($_POST['email']));
//$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));
$id = strip_tags(htmlspecialchars($_POST['id']));
//$category = strip_tags(htmlspecialchars($_POST['category']));


$category = strip_tags(htmlspecialchars($_POST['category']));

$identity = strip_tags(htmlspecialchars($_POST['identity']));

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "general_news";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

switch($category){
   case "feed":
   $sql = "INSERT INTO general_comments_replies (news_id, name, message, category,identity)
VALUES ('.$id.','".$name."','".$message."','".$category."','.$identity.')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
break;

case "business":
   $sql = "INSERT INTO business_comments_replies (news_id, name, message, category)
VALUES ('.$id.','".$name."','".$message."','".$category."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
break;

case "entertainment":
   $sql = "INSERT INTO sports_comments_replies (news_id, name, message, category)
VALUES ('.$id.','".$name."','".$message."','".$category."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
break;

case "sports":
   $sql = "INSERT INTO sports_comments_replies (news_id, name, message, category)
VALUES ('.$id.','".$name."', '".$message."','".$category."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
break;

case "world":
   $sql = "INSERT INTO world_comments_replies (news_id, name, message, category)
VALUES ('.$id.','".$name."','".$message."','".$category."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
break;

}


   
// Create the email and send the message
// $to = 'yourname@yourdomain.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
// $email_subject = "Website Contact Form:  $name";
// $email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
// $headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
// $headers .= "Reply-To: $email_address";   
// mail($to,$email_subject,$email_body,$headers);
return true;         
?>
