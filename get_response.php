<?php 
require_once("config.php");
if((isset($_POST['your_name'])&& $_POST['your_name'] !='') && (isset($_POST['your_email'])&& $_POST['your_email'] !=''))
{
 
$yourName = $conn->real_escape_string($_POST['your_name']);
$yourlName = $conn->real_escape_string($_POST['your_lname']);
$yourEmail = $conn->real_escape_string($_POST['your_email']);
$yourPhone = $conn->real_escape_string($_POST['your_phone']);
$ecole = $conn->real_escape_string($_POST['ecole']);
$niveau = $conn->real_escape_string($_POST['niveau']);
$comments = $conn->real_escape_string($_POST['comments']);
$sql="INSERT INTO users (nom,prenom,phone,email,ecole,niveau, comment) VALUES ('$yourName','$yourlName', '$yourPhone','$yourEmail', '$ecole', '$niveau', '$comments')";


if(!$result = $conn->query($sql)){
die('There was an error running the query [' . $conn->error . ']');
}
else
{
echo("Thank you! We will contact you soon");
}
}
else
{
echo("Please fill Name and Email");
}
?>