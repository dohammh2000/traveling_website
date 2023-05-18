<?php
 $connection = mysqli_connect("localhost","root",'',"book_db");
 
$name = $_POST["name"];
$email = $_POST["email"]; 
$phone = $_POST["phone"];
$address = $_POST["address"];
$location = $_POST["location"];
$guests = $_POST["guests"];
$arrivals = $_POST["arrivals"];
$leaving = $_POST["leaving"];

if($name=="" || $email==""|| $phone=="" || $address=="" || $location=="" || $guests==""|| $arrivals=="" || $leaving=="")
{
   echo'<script> alert("there is an empty field, please fill it")</script>';
   require "book.php";
}else if(!filter_var($email , FILTER_VALIDATE_EMAIL))
{
   echo'<script> alert("Invalid email")</script>';
   require "book.php";
}else{
   $insert="insert into book_form (name,email,phone,address,location,guests,arrivals,leaving) values('$name','$email','$phone','$address','$location','$guests'
   ,'$arrivals','$leaving')";
   mysqli_query($connection,$insert);
   echo'<script> alert("booking success")</script>';
   require "book.php";
}



    

?>
