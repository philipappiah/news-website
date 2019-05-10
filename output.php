<?php
$name = strip_tags(htmlspecialchars($_POST['name']));
//$email_address = strip_tags(htmlspecialchars($_POST['email']));
//$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));
$id = strip_tags(htmlspecialchars($_POST['id']));
//$category = strip_tags(htmlspecialchars($_POST['category']));


$category = strip_tags(htmlspecialchars($_POST['category']));

echo $name;
echo $message;
echo $id;
echo $category;


?>